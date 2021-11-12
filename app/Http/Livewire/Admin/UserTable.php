<?php

namespace App\Http\Livewire\Admin;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\QueryException;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;

class UserTable extends PowerGridComponent
{
    use ActionButton;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp()
    {
        $this
            ->showPerPage()
            ->showRecordCount('short')
            // ->showExportOption('download', ['excel', 'csv'])
            ->showSearchInput();
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */
    public function datasource(): ?Builder
    {
        return Registration::query()->with('country')->withExists('completed_payments');
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): ?PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('full_name')
            ->addColumn('email')
            ->addColumn('country', fn(Registration $user) => $user->country->name)
            ->addColumn('haas_payment', function (Registration $user) {
                return ($user->completed_payments_exists ? "Yes" : "No");
            })
            ->addColumn('created_at_formatted', function (Registration $user) {
                return $user->created_at->format('Y-m-d H:i');
            })
            ->addColumn('updated_at_formatted', function (Registration $user) {
                return $user->created_at->format('Y-m-d H:i');
            });
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */
    public function columns(): array
    {
        return [
            Column::add()
                ->title(__('ID'))
                ->field('id')
                ->sortable(),

            Column::add()
                ->title(__('FULL NAME'))
                ->field('full_name')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('EMAIL'))
                ->field('email')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('COUNTRY'))
                ->field('country')
                ->sortable('country_id'),

            Column::add()
                ->title(__('Made Payment'))
                ->field('haas_payment')
            ,

            Column::add()
                ->title(__('CREATED AT'))
                ->field('created_at_formatted')
            // ->searchable()
            // ->sortable()
            // ->makeInputDatePicker('created_at')
            ,

            Column::add()
                ->title(__('UPDATED AT'))
                ->field('updated_at_formatted')
            // ->searchable()
            // ->sortable()
            // ->makeInputDatePicker('updated_at')
            ,

        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable this section only when you have defined routes for these actions.
    |
    */

    /*
    public function actions(): array
    {
       return [
           Button::add('edit')
               ->caption(__('Edit'))
               ->class('bg-indigo-500 text-white')
               ->route('user.edit', ['user' => 'id']),

           Button::add('destroy')
               ->caption(__('Delete'))
               ->class('bg-red-500 text-white')
               ->route('user.destroy', ['user' => 'id'])
               ->method('delete')
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Edit Method
    |--------------------------------------------------------------------------
    | Enable this section to use editOnClick() or toggleable() methods
    |
    */


    public function update(array $data): bool
    {
        if (!in_array($data['field'], ['full_name', 'is_admin'])) {
            return false;
        }

        if ($data['field'] == 'full_name' && !preg_match(full_name_regex(), trim($data['value']))) {
            return false;
        }

        try {
            $updated = User::query()->find($data['id'])->update([
                $data['field'] => $data['value']
            ]);
        } catch (QueryException $exception) {
            $updated = false;
        }
        return $updated;
    }

    public function updateMessages(string $status, string $field = '_default_message'): string
    {
        $updateMessages = [
            'success' => [
                '_default_message' => __('Data has been updated successfully!'),
                //'custom_field' => __('Custom Field updated successfully!'),
            ],
            'error' => [
                '_default_message' => __('Error updating the data.'),
                //'custom_field' => __('Error updating custom field.'),
            ]
        ];

        return ($updateMessages[$status][$field] ?? $updateMessages[$status]['_default_message']);
    }

    public function template(): ?string
    {
        return null;
    }

}
