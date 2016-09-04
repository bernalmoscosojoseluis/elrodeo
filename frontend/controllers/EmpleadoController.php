<?php

namespace frontend\controllers;

use common\models\Sueldo;
use common\models\Viatico;
use common\models\Bonos;
use common\models\Descuento;
use common\models\Anticipo;
use Yii;
use mPDF;
use common\models\Empleado;
use common\models\Vacaciones;
use common\models\formularioboleta;
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
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'create_time',
                'updatedAtAttribute' => 'update_time',
                'value' => new \yii\db\Expression('NOW()'),
            ],
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
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        //mostramos el detalle del empleado
        $model=$this->findModel($id);
        //renderisamos a la vista view
        return $this->render('view', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
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


        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile=UploadedFile::getInstance($model,'imageFile');
            $size=$model->imageFile->size;
            $temp=$model->imageFile->tempName;
            $name=$model->imageFile->name;
            $model->formato=$model->imageFile->type;
            $f1= fopen($temp,'rb');
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
            $model->fecha_elaboracion_reporte=new yii\db\Expression('NOW()');
            $model->save();
            //var_dump($model);
           // die();
            return $this->redirect(['view', 'id' => $id]);
        }
        //renderisamos el modelo de vacaciones
         return $this->renderAjax('createvacaciones',[
                'model' => $model,
            ]);

    }

    public function actionCreateboleta($id){
        $model=new formularioboleta();

        if ($model->load(Yii::$app->request->post())) {
            $model1 = new Bonos();
            $model1->monto=$model->monto_bono;
            $model1->fecha_bono=$model->fecha_elaboracion;
            $model1->empleado_id=$id;
            $model1->save();

            $model2= new Viatico();
            $model2->monto=$model->monto_viatico;
            $model2->fecha_viatico=$model->fecha_elaboracion;
            $model2->empleado_id=$id;
            $model2->save();

            $model3= new Anticipo();
            $model3->monto=$model->monto_anticipo;
            $model3->fecha_anticipo=$model->fecha_elaboracion;
            $model3->empleado_id=$id;
            $model3->save();

            $model4= new Descuento();
            $model4->monto=$model->monto_descuento;
            $model4->fecha_descuento=$model->fecha_elaboracion;
            $model4->empleado_id=$id;
            $model4->save();

            return $this->redirect(['view', 'id' => $id]);
        }
        return $this->renderAjax('createboleta',[
            'model' => $model,
        ]);
    }
    public function actionCreatereporte(){
        $mpdf=new mPDF();
        //$model= new Empleado();
        $sql5 = 'SELECT CI,nombres,apellidos,ocupacion,sueldomes FROM empleado WHERE id=1';
        $sql = 'SELECT monto FROM anticipo WHERE empleado_id=1';
        $sql1 = 'SELECT monto FROM  bonos WHERE empleado_id=1';
        $sql2 = 'SELECT monto FROM  descuento WHERE empleado_id=3';
        $sql3 = 'SELECT monto FROM  viatico WHERE empleado_id=1';
        $model = Anticipo::findBySql($sql)->all();
        $model1 = Bonos::findBySql($sql1)->all();
        $model2 = Descuento::findBySql($sql2)->all();
        $model3 = Viatico::findBySql($sql3)->all();
        $model5 = Empleado::findBySql($sql5)->all();
        //$model=Anticipo::find()->where(['empleado_id'=>4])->all();
        //$model2=Bonos::find()->where(['empleado_id'=>2])->all();
        //$model3=Viatico::find()->where(['empleado_id'=>4])->all();
        //$model4=Descuento::find()->where(['empleado_id'=>4])->all();
        $mpdf->useOnlyCoreFonts = true;
        $mpdf->SetTitle("Boleta de Pago - Reporte");
        $mpdf->SetAuthor("Jose luis");
        //marca de agua
        $mpdf->SetWatermarkText("Pollos El Rodeo");
        $mpdf->showWatermarkText = true;
        $mpdf->watermark_font = 'DejaVuSansCondensed';
        //darle mas color a la marca de agua
        $mpdf->watermarkTextAlpha = 0.2;
        $mpdf->SetDisplayMode('fullpage');
        //$mpdf->forcePortraitHeaders = true;
        //girar la pagina horizontal
        //$mpdf->AddPage('L');
        $mpdf->WriteHTML($this->renderPartial('createreporte',["model"=>$model,"model1"=>$model1,"model2"=>$model2,"model3"=>$model3,"model5"=>$model5]));
        $mpdf->Output();
        exit();
    }

}
