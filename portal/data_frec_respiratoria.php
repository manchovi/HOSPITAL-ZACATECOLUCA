 <script type="text/javascript">
    function mostrar(){
        $.ajax({
            //type:"GET",
            url:"./rt_graph_frec_respiratoria.php",
            //dataType: 'html',
            dataType: 'json',
            contentType: "application/json; charset=utf-8",
            method: "GET",
            success:function(data){
                //var datos = JSON.parse(data)
                var f_respi = [];
                var fecha = [];
                for(var i=0;i<data.length;i++){
                //for (var i in data) {
                        f_respi.push(data[i].y);
                        fecha.push(data[i].label);
                    }

                //console.log("Data vector frecuencia respiratoria: "+f_respi);
                //console.log(data[5].y);
                //console.log(data[data.length-1].y);
                //var t_gc = data[data.length-1].y;                          //Estoy tomando el último registro.
                var ejey_frespi = data[0].y;                                 //Estoy tomando el primer valor encontrado de la temperatura.
                var ejex_fecha = data[0].label;

                $("#marco_frec_respiratoria").html(ejey_frespi);

                //Imprimo datos en la parte inferior del dashboard.
                $("#respira_1").html(ejey_frespi);    

                //console.log("Frecuencia Respiratoria: "+ejey_frespi);
                 //console.log("Fecha Frecuencia Respiratoria: "+ejex_fecha);
        
                //console.log(data.length);
                //console.log("F.Respi: "+data);

                var chart = new CanvasJS.Chart("chartContainer6", {
                theme: "dark1",                   // "light2", "dark1", "dark2"
                animationEnabled: false,          // change to true		
                zoomEnabled: true,
                exportFileName: "Frecuencia_Respiratoria",
                exportEnabled: true,
                title:{
                    text: "Frecuencia Respiratoria",
                    //color: "yellow",
                    fontSize: 20
                    //margin: 25
                },
                subtitles: [{
                            text: "Paciente xxx000",
                            fontSize: 16,
                            margin: 20
                        }],
                axisX: {
                    interval: 25,          //Esta propiedad la probaré luego.
                    title: "X-Axis",
                    //titleFontColor: "yellow",
                    titleFontSize: 20,
                    crosshair: {
                                enabled: true,
                                snapToDataPoint: true
                                }
                },
                axisY: {
                        title: "Frecuencia Respiratoria",
                        //titleFontColor: "yellow",
                        titleFontSize: 20,
                        logarithmic: false, //change it to true
                        lineColor: "#51CDA0",
                        gridThickness: 1,                     //Juego con los border del grafico. La cuadricula
                        lineThickness: 1,                     //Juego con los border del grafico. La cuadricula
                        suffix: " °C",
                        crosshair: {
                        enabled: true
                    }
                },
                toolTip:{
                            shared:true
                        },  
                legend:{
                        cursor:"pointer",
                        verticalAlign: "top",
                        fontSize: 16,
                        horizontalAlign: "left",
                        dockInsidePlotArea: true,
                        //itemclick: toogleDataSeries
                    },
                /*data: [
                    {
                        dataPoints: datos
                    }
                ]*/
                data: [
                        {
                        //type: "line",  //line, stackedBar, stackedBar
                        type: "line",  
                        //type: "spline",     
                        lineThickness: 4,            //Defino Grosor de la linea principal
                        fillOpacity: .3,      
                        //yValueFormatString: "#,### °C",
                        //indexLabel: "{y}",
                        showInLegend: true,
                        name: "Frec. Respiratoria",
                        lineDashType: "shortDot",  //Default: solid. solid,shortDash,shortDot,shortDashDot,shortDashDotDot,dot,dash,dashDot,longDash,longDashDot,longDashDotDot.
                        markerType: "cross",      //none, circle, square, triangle and cross. Default: circle
                        markerSize: 20,
                        //ValueFormatString:        "DD MMM, YYYY",
                        color: "#22aa77",
                        lineColor: "red",
                        dataPoints: data
                        //dataPoints: datos
                        /*  dataPoints: [{ label: x,  y: y  }] */
                        /*  dataPoints: [
                                        { label: "apple",  y: 10  },
                                        { label: "orange", y: 15  },
                                        { label: "banana", y: 25  },
                                        { label: "mango",  y: 30  },
                                        { label: "grape",  y: 28  }
                                    ] */
                        }
                    ] 
            });
            chart.render();

        /*  function toogleDataSeries(e){
            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                e.dataSeries.visible = false;
            } else{
                e.dataSeries.visible = true;
            }
            chart.render();
            } */

        },
            error: function(data) {
                console.log(data);
            }
    });
}
setInterval(mostrar,1000);
</script>