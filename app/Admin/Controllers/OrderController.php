<?php

namespace App\Admin\Controllers;

use App\Models\Order;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Order';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());

        $grid->disableCreateButton();

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('user_id', __('Client id'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
        $grid->column('area', __('Area'));
        $grid->column('city', __('City'));
        $grid->column('country', __('Country'));
        $grid->column('address', __('Address'));
        $grid->column('zip', __('Zip'));
        $grid->column('products_id', __('Products id'));
        $grid->column('quantities', __('Quantities'));
        $grid->column('prices', __('Prices'));
        $grid->column('total_price', __('Total price'));
        $grid->column('date', __('Date'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Order::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('user_id', __('Client id'));
        $show->field('email', __('Email'));
        $show->field('phone', __('Phone'));
        $show->field('area', __('Area'));
        $show->field('city', __('City'));
        $show->field('country', __('Country'));
        $show->field('address', __('Address'));
        $show->field('zip', __('Zip'));
        $show->field('products_id', __('Products id'));
        $show->field('quantities', __('Quantities'));
        $show->field('prices', __('Prices'));
        $show->field('total_price', __('Total price'));
        $show->field('date', __('Date'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Order());

        $form->text('name', __('Name'));
        $form->number('user_id', __('Client id'));
        $form->email('email', __('Email'));
        $form->mobile('phone', __('Phone'));
        $form->text('area', __('Area'));
        $form->text('city', __('City'));
        $form->text('country', __('Country'));
        $form->text('address', __('Address'));
        $form->text('zip', __('Zip'));
        $form->text('products_id', __('Products id'));
        $form->text('quantities', __('Quantities'));
        $form->text('prices', __('Prices'));
        $form->number('total_price', __('Total price'));
        $form->date('date', __('Date'))->default(date('Y-m-d'));

        return $form;
    }
}
