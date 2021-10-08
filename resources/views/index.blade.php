<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PM Data</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            } 

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      
          
        <div class="flex-center ">
            

            <div class="content">
                <div class="m-b-md">
                    <h2>Question Marks Exercise</h2>
                    
                    <div class="card-block">

                   
                            <form method="post" action="{{url('/questionMarks')}}">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Enter strings</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="strData" class="form-control">
                                        </div>
                                    </div>
                                     
                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">&nbsp;</label>
                                        <div class="col-sm-10">
                                           <button type="submit" class="btn btn-inverse"> Generate</button>
                                        </div>
                                    </div>
                                </form>
                               
                            
                            <p>&nbsp;</p><hr>
                            
                               
                              
                        
                   </div>
                </div>

                
            </div>
        </div>
        
       
    </body>
</html>
