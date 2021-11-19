<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Post::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','title','body','sub_title'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make('Title','title')->required(),
            Text::make('Sub Title','sub_title')->nullable(),
            BelongsTo::make('Category', 'BlogCategory', 'app\nova\BlogCategory')->required(),

            Text::make('Slug','slug')->rules(['min:3','required']),
            Trix::make('Body','body')->required(),
            Image::make('Image', 'file_name')->store(function (Request $request){
                $path = $request->file('file_name')->store('images', 's3');
                Storage::disk('s3')->setVisibility($path, 'public');
                $url = Storage::disk('s3')->url($path);
                return[
                    'file_name'=>basename($path),
                    'url'=>$url
                ];
            })->disk('s3')
                ->thumbnail(function ($value, $disk) {
                    return $value
                        ? Storage::disk($disk)->url('images/'.$value)
                        : null;
                })->preview(function ($value, $disk) {
                    return $value
                        ? Storage::disk($disk)->url('images/'.$value)
                        : null;
                })->required()
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
