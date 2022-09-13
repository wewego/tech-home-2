<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ClientController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->disableCreateButton();

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('phonenumber', __('Phone Number'));
        $grid->column('area', __('Area'));
        $grid->column('city', __('City'));
        $grid->column('country', __('Country'));
        $grid->column('email', __('Email'));
        $grid->column('email_verified_at', __('Email verified at'))->diffForHumans();
        $grid->column('password', __('Password'));
        $grid->column('created_at', __('Created at'))->diffForHumans();
        $grid->column('updated_at', __('Updated at'))->diffForHumans();

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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('phonenumber', __('Phone Number'));
        $show->field('area', __('Area'));
        $show->field('city', __('City'));
        $show->field('country', __('Country'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('password', __('Password'));
        $show->field('remember_token', __('Remember token'));
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
        $form = new Form(new User());

        $form->text('name', __('Name'));
        $form->text('phonenumber', __('Phone Number'));
        $form->text('area', __('Area'));
        $form->text('city', __('City'));
        $form->text('country', __('Country'));
        $form->email('email', __('Email'));
       // $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
       // $form->password('password', __('Password'));
       // $form->text('remember_token', __('Remember token'));

        return $form;
    }
}
