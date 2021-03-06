<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-right">
                        <a href="{{ route('result.download') }}" class="btn btn-primary">Exporter en excel</a>
                        <a href="{{ route('result.create') }}" class="btn btn-primary">Importer en excel</a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr class="text-center">
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Departement</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($results as $student)
                                <tr class="text-center">
                                    <td>{{ $student->username }}</td>
                                    <td>{{ $student->prenom }}</td>
                                    <td>{{ $student->department }}</td>
                                    <td>
                                        <form onsubmit="return confirm('Voulez vous supprimer')" action="{{ route('result.destroy', $student) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">
                                                Supprimer
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
