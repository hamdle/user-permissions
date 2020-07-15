@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div id="app">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Users</div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Permission</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Eric</td>
                                    <td>Developer</td>
                                    <td><edit-permissions-button></edit-permissions-button></td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
