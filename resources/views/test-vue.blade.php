@extends('layouts.app1')
@section('content')
    <div id="root" class="wrapper" style="margin-top: 50%">
        <form action="{{localizeURL('test-vue')}}" method="post" @keydown="errors.clear($event)" @submit.prevent="onSubmit" enctype="multipart/form-data">
            <input class="form-control" type="text" name="name_en" v-model="name_en" >
            <span class="help text-danger" v-if="errors.has('name_en')" v-text="errors.get('name_en')"></span> {{--@keydown="errors.clear('name_en')"--}}
            <input class="form-control" type="text" name="name_ar" v-model="name_ar" >
            <span class="help text-danger" v-if="errors.has('name_ar')" v-text="errors.get('name_ar')"></span>
            <button type="submit" class="btn btn-success" :disabled="errors.any()"> Submit</button>
        </form>
    </div>
@endsection
