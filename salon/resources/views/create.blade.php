@extends('index')

@section('content')
<div class="container">
    <div class="">
        <form method="post" action="{{route('player.store')}}">
            {{csrf_field()}}
            <div class="form-group row">
                <label for="lastname" class="col-sm-2 col-form-label">Apellido</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="lastname" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="firstname" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="firstname" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label">Fecha de nacimiento</label>
                <div class="col-10">
                    <input class="form-control" type="date" name="birthday" value="2019-03-24" max="2019-03-24" id="example-date-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-2 col-form-label">Phone number</label>
                <div class="col-10">
                    <input class="form-control" name="phone" type="number" value="42" id="phone">
                </div>
            </div>
            <div class="form-group row">
                <label for="escuela" class="col-2 col-form-label">Escuela</label>
                <div class="col-10">
                    <input class="form-control" name="school" type="text" value="" id="escuela" required>
                </div>"
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label" for="selectStudy">Nivel estudio</label>
                <div class="col-10">
                    <select class="form-control" name="studies" id="selectStudy">
                        <option value="3 ESO">3 ESO</option>
                        <option value="4 ESO">4 ESO</option>
                        <option value="1 Bachillerato">1 Bachillerato</option>
                        <option value="2 Bachillerato">2 Bachillerato</option>
                        <option value="1 Grado Medio">1 Grado Medio</option>
                        <option value="2 Grado Medio">2 Grado Medio</option>
                        <option value="1 Grado Superior">1 Grado Superior</option>
                        <option value="2 Grado Superior">2 Grado Superior</option>
                        <option value="1 Grado Univ">1 Grado Univ</option>
                        <option value="2 Grado Univ">2 Grado Univ</option>
                        <option value="Master">Master</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2">isActive ?</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="active" type="checkbox" checked>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2">Is gaming ?</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="onGame" type="checkbox">
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label" for="selectComputer">Computer</label>
                <div class="col-10">
                    <select class="form-control" name="laptop" id="selectComputer">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection


