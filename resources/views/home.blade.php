@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <!-- Conteúdo da página -->
            <main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
                <!-- Resumo do Dashboard -->
                <div class="row mt-4">
                    <div class="col-md-3">
                        <div class="card bg-primary text-white">
                            <div class="card-body d-sm-flex">
                                <h5 class="card-title m-1">Agendamentos: </h5>
                                <h5 class="card-text m-1"> 0 </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-danger text-white">
                            <div class="card-body d-sm-flex">
                                <h5 class="card-title m-1">Pendencias: </h5>
                                <h5 class="card-text m-1"> 0 </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-warning text-white">
                            <div class="card-body d-sm-flex">
                                <h5 class="card-title m-1">Em andamento</h5>
                                <h5 class="card-text m-1"> 0 </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-success text-white">
                            <div class="card-body d-sm-flex">
                                <h5 class="card-title m-1">Concluidas</h5>
                                <h5 class="card-text m-1"> 0 </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12 d-sm-flex justify-content-end ">
                        <button class="btn btn-dark  m-1">Novo projeto <i class="bi bi-folder-plus"></i></button>
                        <button class="btn btn-dark  m-1">Nova Tarefa <i class="bi bi-file-plus"></i></button>
                    </div>
                </div>
                <!-- Calendário de Atividades -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Calendário de Atividades</h5>
                                <div id="calendar">
                                    <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Cliente</th>
                                                <th>Projeto</th>
                                                <th>Tarefa</th>
                                                <th>Responsável</th>
                                                <th>Duração</th>
                                                <th>Status</th>
                                                <th>Prioridade</th>
                                                <!--th>Observações</th-->
                                                <th>Entrega/Agendado</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>GBMA</td>
                                                <td>Formulario Hapvida</td>
                                                <td>Implementar funcionalidade X</td>
                                                <td>Alex Neto</td>
                                                <td>18H 30m</td>
                                                <td>Em andamento</td>
                                                <td>Alta</td>
                                                <!--td>-</td-->
                                                <td>22/07/2023</td>
                                                <td>
                                                    <a class="btn btn-success btn-sm m-1" href="#">Executar</a> 
                                                    <a class="btn btn-primary btn-sm m-1" href="#">Prorrogar</a> 
                                                    <a class="btn btn-danger btn-sm m-1" href="#">Cancelar</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>SimiusZap</td>
                                                <td>Sistema Lojas online</td>
                                                <td>Reunião Semanal</td>
                                                <td>Alex Neto</td>
                                                <!--td>João</td-->
                                                <td></td>
                                                <td>Agendado</td>
                                                <td>Média</td>
                                                <!--td>-</td-->
                                                <td>26/07/2023</td>
                                                <td>
                                                    <a class="btn btn-success btn-sm m-1" href="#">Executar</a> 
                                                    <a class="btn btn-primary btn-sm m-1" href="#">Prorrogar</a> 
                                                    <a class="btn btn-danger btn-sm m-1" href="#">Cancelar</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               


                <!-- Outros widgets e gráficos podem ser adicionados aqui -->

            </main>
        </div>
    </div>
@endsection
