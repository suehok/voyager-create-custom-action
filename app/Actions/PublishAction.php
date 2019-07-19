<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class PublishAction extends AbstractAction
{
    public function getTitle()
    {
        return $this->data->{'status'}=="PUBLISHED"?'Pending':'Publish';
    }

    public function getIcon()
    {

        return $this->data->{'status'}=="PUBLISHED"?'voyager-x':'voyager-external';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary pull-left',
        ];
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'posts';
    }

    public function getDefaultRoute()
    {

        return route('posts.publish', array("id"=>$this->data->{$this->data->getKeyName()}));
    }
}