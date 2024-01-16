<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUTANOL APPLICATION</title>
    <link href="asset/images/logoB.png" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
  
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
  
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
  
    <style>
        .kbw-signature { width: 100%; height: 200px;}
        #sig canvas{
            width: 100% !important;
            height: auto;
        }
        <style>
        

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        select, input {
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
  
</head>

<body class="bg-dark">
<div class="container mb-5">
   <div class="row">
       <div class="col-md-6 offset-md-3 mt-5">
           <div class="card">
               <div class="card-header">
                   <h5>Hadiri Rapat </h5>
               </div>
               <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success  alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>  
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form class="user" action="{{ route('signaturepad.store') }}" method="POST">
                        @csrf
                        
                        <div class="col-md-12">
                           
                            <div>
                                <label for="nama">Nama:</label>
                                <input type="text" id="nama" name="nama">
                            </div>
                            
                            <div>
                                <label for="jenis_kelamin">Jenis Kelamin:</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="" disabled selected>Jenis Kelamin</option>
                                    <option value="lakilaki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="nama_instansi">Nama Instansi:</label>
                                <select id="opd" name="id_OPD">
                                <option value="">Pilih Nama Instansi</option>
                                @foreach($tamu as $instansi)
                                <option
                                    value="{{$instansi->id_OPD}}">{{$instansi->nama_instansi}}</option>
                            @endforeach
                                </select>
                            <div>
                                <label for="jabatan">Jabatan:</label>
                                <input type="text" id="jabatan" name="jabatan">
                            </div>
                            <div>
                                <label for="no_telepon">No Telepon:</label>
                                <input type="text" id="no_telepon" name="no_telp">
                            </div>
                        <button class="btn btn-success" >Kirim</button>
                    </form>
               </div>
           </div>
       </div>
   </div>
</div>

</body>
</html>