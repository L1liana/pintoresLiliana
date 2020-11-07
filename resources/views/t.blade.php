@extends('layouts.master')
@section('title',$title)
@section('header')
@stop
<section class="acerca-de">
    @section('pintor')
        {{$pintor}}
    @stop
    <div class="info-container">
        @section('content')
            <div class="container-all">
                <img src="/img/jo.jpg" alt="">
                <h2>Biografía</h2>
                <p>
                    (Théodor o Théodore Géricault; Ruán, Francia, 1791 - París, 1824) Pintor francés. Fue una figura singular en el panorama de la pintura francesa y un pionero del Romanticismo, ideal que encarnó también en su tumultuosa vida y en su prematura muerte, a los treinta y tres años, a causa de un accidente de equitación. <br>
                    En 1798 se trasladó con su familia a París, donde se formó artísticamente en los estudios de Vernet y de Pierre Guérin. No obstante, su estilo se debe en buena medida a las copias de obras maestras que realizó en el Louvre y a una estancia en Italia (1816-1817), donde entró en contacto con la obra de Miguel Ángel Buonarroti y con el barroco romano. <br>
                    La carrera de Géricault como pintor se extiende apenas a lo largo de diez años, pese a lo cual su obra es notable y abundante. En sus primeras realizaciones (La muerte de Hipólito, La captura del caballo salvaje), un planteamiento todavía clásico va acompañado de una materia pictórica rica y pastosa, y de un modelado de las figuras a través de la luz, que son ya rasgos claramente románticos. <br>
                    La balsa de la Medusa (1819), de Théodore Géricault <br>
                    En 1819 pintó y expuso en el Salón de aquel año, en París, su pintura más famosa: La balsa de la Medusa, que ganó una medalla y produjo una profunda conmoción por ser antitética de las tendencias clasicistas entonces en boga. El cuadro aludía al naufragio de la Medusa en 1816, un acontecimiento de la época con fuertes connotaciones políticas, tratado con acentos épicos. Tanto por el tema como por el enfoque (la energía y la fuerza pasional son las notas dominantes), el lienzo era de una absoluta novedad y ejerció una influencia duradera. <br>
                    De 1820 a 1822, Géricault estuvo en el Reino Unido, donde pintó sobre todo carreras de caballos, en respuesta a su gran afición al mundo de la hípica. Hacia 1822-1823 realizó una excepcional serie de retratos de enfermos mentales, como preparación para una obra que no llegó a ejecutar; son retratos de sorprendente esencialidad y de un realismo crudo, connatural este último a su estilo. Fue amigo de Eugène Delacroix, su principal epígono y continuador artístico.
                </p>
            </div>
            <h2 class="sub">Obras más importantes</h2>
        @stop
        <div class="about-gallery">
            @section('obras')
                <img src="/img/jo1.jpg" alt="">
                <img src="/img/jo2.jpg" alt="">
                <img src="/img/jo3.jpg" alt="">
                <img src="/img/jo4.jpg" alt="">
                <img src="/img/jo5.jpg" alt="">
        </div>
        <br>
        <br>
        <br>
        <br>
        @stop
    </div>
</section>
@section('footer')
    Copyright:{{date('Y')}} - Liliana López
@stop
