@extends("layout.LayoutPadrao")

@section("conteudo")
    <div class="page-header">
        <div class="container-fluid">
            <h1>
                Dashboard
            </h1>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-4">

                <div class="aw-box">
                    <div class="aw-box__icon">
                        <i class="fa  fa-bank  fa-3x"></i>
                    </div>
                    <div class="aw-box__value">R$983.433,20</div>
                    <div class="aw-box__title">Faturamento total</div>
                </div>

            </div>

            <div class="col-sm-4">

                <div class="aw-box">
                    <div class="aw-box__icon">
                        <i class="fa  fa-usd  fa-3x"></i>
                    </div>
                    <div class="aw-box__value">R$343.542,59</div>
                    <div class="aw-box__title">Faturamento no ano</div>
                </div>

            </div>

            <div class="col-sm-4">

                <div class="aw-box">
                    <div class="aw-box__icon">
                        <i class="fa  fa-heartbeat  fa-3x"></i>
                    </div>
                    <div class="aw-box__value">R$40.233,40</div>
                    <div class="aw-box__title">Faturamento no mês</div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">

                <div class="aw-box">
                    <div class="aw-box__icon">
                        <i class="fa  fa-users  fa-3x"></i>
                    </div>
                    <div class="aw-box__value">1.298</div>
                    <div class="aw-box__title">Total de clientes</div>
                </div>

            </div>

            <div class="col-sm-4">

                <div class="aw-box">
                    <div class="aw-box__icon">
                        <i class="fa  fa-battery-empty  fa-3x"></i>
                    </div>
                    <div class="aw-box__value">123</div>
                    <div class="aw-box__title">Produtos sem estoque</div>
                </div>

            </div>

            <div class="col-sm-4">

                <div class="aw-box">
                    <div class="aw-box__icon">
                        <i class="fa  fa-truck  fa-3x"></i>
                    </div>
                    <div class="aw-box__value">3.344</div>
                    <div class="aw-box__title">Estoque total</div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="aw-graph-box">
                    <div class="aw-graph-box__header">
                        <h2 class="aw-graph-box__title">Faturamento por mês
                            <small>últimos 12 meses</small>
                        </h2>
                    </div>
                    <div class="aw-graph-box__content">
                        <div class="aw-graph-box__no-data">
                            <i class="fa  fa-line-chart  fa-2x"></i>
                            <span>Não há dados</span>
                        </div>

                        <div>
                            <canvas id="lineChart" height="160"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="aw-graph-box">
                    <div class="aw-graph-box__header">
                        <h2 class="aw-graph-box__title">Faturamento por representante
                            <small>últimos 12 meses</small>
                        </h2>
                    </div>
                    <div class="aw-graph-box__content" style="position: relative">
                        <div class="aw-graph-box__no-data">
                            <i class="fa  fa-line-chart  fa-2x"></i>
                            <span>Não há dados</span>
                        </div>

                        <div>
                            <canvas id="lineChart" height="160"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection