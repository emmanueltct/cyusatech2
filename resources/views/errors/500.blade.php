@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Sorry!! something went wrong with retrieving or sending data. Please use our navigation menu and Go back where you are and try again'))

