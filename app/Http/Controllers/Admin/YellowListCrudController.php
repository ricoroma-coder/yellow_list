<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\YellowListRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/**
 * Class YellowListCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class YellowListCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    // use \Backpack\CRUD\app\Traits\Select2Multiple;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\YellowList::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/yellow-list');
        CRUD::setEntityNameStrings('yellow list', 'yellow lists');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */

        CRUD::column('user_id')
            ->label(trans('backpack::base.user'))
            ->type('select')
            ->entity('user')
            ->model('App\Models\User')
            ->attribute('name')
            ->options(function ($query) {
                return $query->where('id', backpack_user()->id)->get();
            });

        CRUD::column('name')
            ->label(trans('backpack::base.name'))
            ->type('text');

        CRUD::column('description')
            ->label(trans('backpack::crud.yellow_list.description'))
            ->type('text');
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(YellowListRequest::class);
        CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         */

        CRUD::field('user_id')
            ->type('select')
            ->name('user_id')
            ->entity('user')
            ->model('App\Models\User')
            ->attribute('name')
            ->attributes([
                'readonly' => 'readonly',
            ])
            ->options(function ($query) {
                return $query->where('id', backpack_user()->id)->get();
            });
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
