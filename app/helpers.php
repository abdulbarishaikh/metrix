<?php 
    function technologies(){
        return App\Models\Technology::all();
    }
    function platforms(){
        return App\Models\Platform::all();
    }
?>