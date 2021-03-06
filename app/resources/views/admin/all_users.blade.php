<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin | All users</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

        
    </head>
    <body>

           @include('partials.header')

                  <section class="hero is-link">
                    <div class="hero-body">
                      <div class="container">
                        <div class="columns is-vcentered">
                          <div class="column">
                            <p class="title">
                              Admin
                            </p>
                            <p class="subtitle">
                            </p>
                          </div>
                          <div class="column is-narrow">
                            <div id="carboncontainer">
                  
                            </div>
                  
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="hero-foot">
                      <div class="container">
                        <nav class="tabs is-boxed">
                          <ul>
                            <li class="is-active">
                              <a href="{{ route('admin')}}">Pending Approvals</a>
                            </li>
                            <li >
                              <a href="{{ route('assign')}}">User Management</a>
                            </li>
                            <li>
                              <a href="{{ route('pollmanagement') }}"> Pool Management</a>
                            </li>
                          </ul>
                        </nav></div>
                      </div>
                    
                  </section>

                  <section class="section">
                    <div class="container">
                      <h1 class="title"><b> All Users </b></h1>                  
                      <hr style="margin-bottom: 0;">
                      <table id="pendings" class="display">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Last Name</th>
                                    <th>Nickname</th>
                                    <th>E-mail</th>
                                    <th>City</th>
                                    <th>Cellphone</th>
                                    <th>Referred By</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)

                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->lastname}}</td>
                                    <td>{{$user->nickname}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->city}}</td>
                                    <td>{{$user->cellphone}}</td>
                                    <td>{{$user->referredby}}</td>
                                </tr>

                            @endforeach
                            </tbody>
                            
                        </table>


                    </div>
                  </section>
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    
    <script>
        
        $(document).ready( function () {
            $('#pendings').DataTable();
        } );
        
    </script>


</html>
