@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Likelihood/Probability of Risk Occurence</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-light">
                                <tr>
                                    <th>Rating</th>
                                    <th>Deskripsi</th>
                                    <th>Likelihood/Probability of Risk Occurence</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Rare (1)</td>
                                    <td>Hampir tidak pernah terjadi</td>
                                    <td>&lt;20%</td>
                                </tr>
                                <tr>
                                    <td>Unlikely (2)</td>
                                    <td>Bisa/mungkin terjadi</td>
                                    <td>20% - &lt;50%</td>
                                </tr>
                                <tr>
                                    <td>Moderate (3)</td>
                                    <td>Jarang terjadi</td>
                                    <td>50% - &lt;70%</td>
                                </tr>
                                <tr>
                                    <td>Likely (4)</td>
                                    <td>Sering terjadi</td>
                                    <td>70% - &lt;90%</td>
                                </tr>
                                <tr>
                                    <td>Almost Certain (5)</td>
                                    <td>Hampir pasti selalu terjadi</td>
                                    <td>&gt;90% - &lt;100%</td>
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

