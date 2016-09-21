<?php

namespace frontend\controllers;

use common\models\Boleta;
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
use yii\db\Connection;
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
        protected function findModelVacaciones($id)
    {
        if (($model = Vacaciones::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionCreatevacaciones($id)
    {    //creamos el modelo de la vista vacaciones
        $model=new Vacaciones();
        //si recibimos los datos por post y validamoes los mismos
        // if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) 
        // {
        //     Yii::$app->response->format='json';
        //     return ActiveForm::validate($model);
        // }
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
    public function actionCreatereporte($id,$inicio,$final){
        $mpdf=new mPDF();
        $sql5 = 'SELECT CI,nombres,apellidos,ocupacion,sueldomes FROM empleado WHERE id="' .$id. '"';
        $sql = 'SELECT SUM(monto) AS monto FROM anticipo WHERE empleado_id="' .$id. '" AND fecha_anticipo>="' .$inicio. '" AND fecha_anticipo<="' .$final. '"';
        $sql1 = 'SELECT SUM(monto) AS monto FROM  bonos WHERE empleado_id="' .$id. '" AND fecha_bono>="' .$inicio. '" AND fecha_bono<="' .$final. '"';
        $sql2 = 'SELECT SUM(monto) AS monto FROM  descuento WHERE empleado_id="' .$id. '" AND fecha_descuento>="' .$inicio. '" AND fecha_descuento<="' .$final. '"';
        $sql3 = 'SELECT SUM(monto) AS monto FROM  viatico WHERE empleado_id="' .$id. '" AND fecha_viatico>="' .$inicio. '" AND fecha_viatico<="' .$final. '"';
        $model = Anticipo::findBySql($sql)->all();
        $model1 = Bonos::findBySql($sql1)->all();
        $model2 = Descuento::findBySql($sql2)->all();
        $model3 = Viatico::findBySql($sql3)->all();
        $model5 = Empleado::findBySql($sql5)->all();
        $acu=0;
        if(!empty($model5))
        {
            foreach($model as $anti)
            {
                $acu = $anti->monto + $acu;
                foreach($model2 as $desc)
                {
                    $acu = $desc->monto + $acu;
                    foreach($model5 as $sueldo)
                    {
                        $acu = $sueldo->sueldomes - $acu;
                    }
                }
            }
        }
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
        $mpdf->WriteHTML($this->renderPartial('createreporte',["model"=>$model,"model1"=>$model1,"model2"=>$model2,"model3"=>$model3,"model5"=>$model5,"acu"=>$acu]));
        $mpdf->Output();
        exit();
    }

    public function actionCreateboletadepago($id){
        $model=new Boleta();
        if ($model->load(Yii::$app->request->post())) {
            if (!empty($_POST)){
                if ($model->validate()) {
                    $bpost=Yii::$app->request->post()['Boleta'];
                    $inicio=$bpost['fecha_inicio'];
                    $final=$bpost['fecha_final'];
                    return $this->redirect(['createreporte','id' => $id,'inicio'=>$inicio,'final'=>$final]);
                }else{
                    $model->getErrors();
                }
            }
        }
        return $this->renderAjax('boletadepago', ["model" => $model, "empleado_id" => $id]);
    }
    public function actionReportevacaciones($vacacion_id)
    {
        $model=$this->findModelVacaciones($vacacion_id);
        $mpdf=new mPDF();
        $mpdf->SetTitle("Vacaciones - Reporte");
        $mpdf->WriteHTML($this->renderPartial('reportevacaciones',["model"=>$model]));
        $mpdf->Output();
        exit();
        //return $this->render('reportevacaciones');
    }
    public function actionReportefiniquito($id)
    {

       $mpdf=new mPDF();
        $mpdf->SetTitle("Finiquito - Reporte");
        $mpdf->WriteHTML($this->renderPartial('reportefiniquito'));
        $mpdf->Output();
        exit(); 
       // return $this->render('reportefiniquito');
    }
}