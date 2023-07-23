@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 mt-3">
        <div class="card" style="padding: 20px">
            <form action="{{ url('admin/profil/updateprofil') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-Profil :profil=$profil />
                <div class="mt-2 float-end">
                    <button type="button" class="btn btn-primary me-2" value="edit" id="edit"
                        onclick="active()">Edit</button>
                    <button type="button" class="btn btn-outline-secondary" value="cancel" onclick="nonactive()"
                        id="cancel">Cancel</button>
                    <button type="submit" class="btn btn-primary me-2" value="save" onclick="nonactive()"
                        id="save">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        function active() {
            var a = document.querySelectorAll('[id = profil]');
            a.forEach(element => {
                element.className = "form-control";
                element.removeAttribute("readonly");
            });
        }

        function nonactive() {
            var a = document.querySelectorAll('[id = profil]');
            a.forEach(element => {
                element.className = "form-control-plaintext";
                element.setAttribute("readonly", true)
            });
        }

        $("#cancel, #save").hide();

        // Button profil
        $('#edit').click(function() {
            $(this).hide();
            $('#save, #cancel').show();
        });

        $('#cancel').click(function() {
            $('#edit').show();
            $('#save, #cancel').hide();
        });

        $('#save').click(function() {
            $(this).hide();
            $('#cancel').hide();
            $('#edit').show();
        });
    </script>
@endsection
