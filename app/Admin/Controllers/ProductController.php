<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('productImageURL', __('Product Image'))->image();
        $grid->column('productName', __('Product Name'));
        $grid->column('productDescription', __('Product Description'));
        $grid->column('productPrice', __('Product Price'));
        $grid->column('productWeight', __('Product Weight'));
        $grid->column('productStock', __('Product Stock'));
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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('productName', __('Product Name'));
        $show->field('productDescription', __('Product Description'));
        $show->field('productPrice', __('Product Price'));
        $show->field('productWeight', __('Product Weight'));
        $show->field('productStock', __('Product Stock'));
        $show->field('productImageURL', __('Product Image'))->image();
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
        $form = new Form(new Product());

        $form->text('productName', __('Product Name'))->required();
        $form->multipleSelect('categories','Categories')->options(Category::all()->pluck('categoryName','id'));

        $form->textarea('productDescription', __('Product Description'))->required();
        $form->number('productPrice', __('ProductPrice'))->required()->default(1);
        $form->decimal('productWeight', __('ProductWeight'))->required();
        $form->number('productStock', __('ProductStock'))->required();
        $form->image('productImageURL', __('Product Image'))->required();

        return $form;
    }
}
