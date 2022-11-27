<?php

namespace App\Admin\Controllers;

use App\Models\travel;
use Encore\Admin\Form;
use Encore\Admin\Http\Controllers\AdminController;
use Encore\Admin\Show;
use Encore\Admin\Table;

class TravelController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'travel';

    /**
     * Make a table builder.
     *
     * @return Table
     */
    protected function table()
    {
        $table = new Table(new travel());

        $table->column('id', __('Id'));
        $table->column('name', __('Name'));
        $table->column('img', __('Img'));
        $table->column('price', __('Price'));
        $table->column('people', __('People'));
        $table->column('stars', __('Stars'));
        $table->column('description', __('Description'));
        $table->column('location', __('Location'));
        $table->column('created_at', __('Created at'));
        $table->column('updated_at', __('Updated at'));

        return $table;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(travel::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('img', __('Img'));
        $show->field('price', __('Price'));
        $show->field('people', __('People'));
        $show->field('stars', __('Stars'));
        $show->field('description', __('Description'));
        $show->field('location', __('Location'));
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
        $form = new Form(new travel());

        $form->text('name', __('Name'));
        $form->image('img', __('Img'));
        $form->number('price', __('Price'));
        $form->number('people', __('People'));
        $form->number('stars', __('Stars'));
        $form->text('description', __('Description'));
        $form->text('location', __('Location'));

        return $form;
    }
}
