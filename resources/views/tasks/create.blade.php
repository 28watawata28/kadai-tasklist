@extends('layouts.app')

@section('content')
    <h1>タスクの新規登録ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        {!! Form::label('status', '状況:') !!}
        {!! Form::text('status') !!}
        
        {!! Form::submit('設定') !!}
    {!! Form::close() !!}
@endsection