<?php

namespace frontend\controllers;

use Yii;
use common\models\Empleado;
use common\models\Vacaciones;
use common\models\VacacionesSearch;
use common\models\EmpleadoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\behaviors\TimestampBehavior;
use yii\web\UploadedFile;

/**
 * EmpleadoController implements the CRUD actions for Empleado model.
 */
class EmpleadoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
        
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'timestamp'=>[
                'class'=>TimestampBehavior::className(),
                'createdAtAttribute'=>'create_time',
                'createdAtAttribute'=>'update_time',
                'value'=>new\yii\db\Expression('NOW()'),
            ]
        ];
    }

    /**
     * Lists all Empleado models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EmpleadoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Empleado model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {   
        //sacamos todos los datos filtrados de las vacaciones 
        $searchModel = new VacacionesSearch();
       // var_dump(Yii::$app->request->queryParams);
       // die();
       $listado = Vacaciones::find()->where(['empleado_id'=>$id])->all();       
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        //mostramos el detalle del empleado
        $model=$this->findModel($id);
        //renderisamos a la vista view
        return $this->render('view', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'listado'=>$listado,
        ]);
    }

    /**
     * Creates a new Empleado model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Empleado();

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile=UploadedFile::getInstance($model,'imageFile');
            $size=$model->imageFile->size;
            $temp=$model->imageFile->tempName;
            $name=$model->imageFile->name;
            $model->formato=$model->imageFile->type;
            $f1= fopen($temp,"rb");
            $foto_reconvertida = fread($f1,$size);
            $foto_reconvertida = base64_encode($foto_reconvertida);
            fclose($f1);
            $model->imagen=$foto_reconvertida;
            $model->imagenombre=$name;
            $model->imagentamano=$size;
            $model->save();
            $model->imageFile->saveAs('uploads/' . $model->id . '.' . $model->imageFile->extension);
            return $this->redirect(['view', 'id' => $model->id]);            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    /**
     * Updates an existing Empleado model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        if (!empty($_POST)) {
            $mpost=Yii::$app->request->post()['Empleado'];
            //var_dump($model);
            //die();
            //$model->imageFile=UploadedFile::getInstance($model,'imageFile');
            $model->nombres=$mpost['nombres'];
            $model->apellidos=$mpost['apellidos'];
            $model->email=$mpost['email'];
            $model->telefono=$mpost['telefono'];
            $model->areatrabajo_id=intval($mpost['areatrabajo_id']);
            $model->sueldomes=$mpost['sueldomes'];
            //$size=$model->imageFile->size;
            //$temp=$model->imageFile->tempName;
            //$name=$model->imageFile->name;
            //$model->formato=$model->imageFile->type;
            //$f1= fopen($temp,'rb');
            //$foto_reconvertida = fread($f1,$size);
            //$foto_reconvertida = base64_encode($foto_reconvertida);
            //fclose($f1);
            //$model->imagen=$foto_reconvertida;
            //$model->imagenombre=$name;
            //$model->imagentamano=$size;
            //var_dump($model);
            //die();
           // if ($model->validate()) {
                $model->save(false);
           // }

            
            //$model->imageFile->saveAs('uploads/' . $model->id . '.' . $model->imageFile->extension);
                    return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Empleado model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Empleado model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Empleado the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Empleado::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionCreatevacaciones($id)
    {    //creamos el modelo de la vista vacaciones
        $model=new Vacaciones();
        //si recibimos los datos por post y validamoes los mismos
        if ($model->load(Yii::$app->request->post())) {
            $model->empleado_id=$id;
            $model->fecha_elaboracion_reporte = new yii\db\Expression('NOW()');
            //$model->save();
            if($model->save())
            {
              return $this->redirect(['view', 'id' => $id]);
            }
            //var_dump($model);
           // die();
            //return $this->redirect(['view', 'id' => $id]);
        }
        //renderisamos el modelo de vacaciones
         return $this->renderAjax('createvacaciones',[
                'model' => $model,
            ]);
    }
    public function actionreportevaciones($vacacion_id,$empleado_id)
    {
        
    }
}
