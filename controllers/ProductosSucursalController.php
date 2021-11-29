<?php

namespace app\controllers;

use app\models\ProductosSucursal;
use app\models\ProductosSucursalSearch;
use app\models\Sucursal;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductosSucursalController implements the CRUD actions for ProductosSucursal model.
 */
class ProductosSucursalController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return [
            'ghost-access' => [
                'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
            ],
        ];
    }

    /**
     * Lists all ProductosSucursal models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductosSucursalSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProductosSucursal model.
     * @param int $id ID producto por sucursal
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ProductosSucursal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProductosSucursal();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $productoSucursal = ProductosSucursal::find()->where(['id_producto' => $model->id_producto, 'id_sucursal' => Sucursal::getCurrentSucursal()->id_sucursal])->one();
                if(isset($productoSucursal)) {
                    $productoSucursal->fecha_registro = date("Y-m-d H:i:s");
                    $productoSucursal->cantidad += $model->cantidad;
                    if($productoSucursal->save()) {
                        return $this->redirect(['view', 'id' => $productoSucursal->id_producto_sucursal]);
                    }
                } else {
                    $model->fecha_registro = date("Y-m-d H:i:s");
                    $model->id_sucursal = Sucursal::getCurrentSucursal()->id_sucursal;
                    if($model->save()) {
                        return $this->redirect(['view', 'id' => $model->id_producto_sucursal]);
                    }
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ProductosSucursal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID producto por sucursal
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post())) {
            $model->fecha_registro = date("Y-m-d H:i:s");
            if($model->save()) {
                return $this->redirect(['view', 'id' => $model->id_producto_sucursal]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ProductosSucursal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID producto por sucursal
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProductosSucursal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID producto por sucursal
     * @return ProductosSucursal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProductosSucursal::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
