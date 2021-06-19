$.ajax({
    url: "include/grab-data-for-graphs.php",
    type: "GET",
    success: function(data){
        console.log(data);

        var tempDate;
        var tempSales;
        var flag;

        var labels = {
            sales2021: []
        }

        var salesHolder = {
            sales2021: []
        }
        var len = data.length;

        for( var i = 0; i < len ; i++){
            flag = 1;
            tempDate = data[i].orderdate;
            var checkLen = labels.sales2021.length;

            for(var j = 0; j < checkLen; j++){
                if(tempDate == labels.sales2021[j]){
                    flag = 0;
                    break;
                } else {
                    flag = 1;
                }
            }
            if (flag == 1){
                labels.sales2021.push(tempDate);
            }
        }

        var checkLen = labels.sales2021.length;
        for(var i = 0; i < checkLen; i++){
            salesHolder.sales2021.push(0);
        }

        for(var i = 0; i < len ; i++) {
            tempDate = data[i].orderdate;
            tempSales = parseFloat(data[i].totalprice);

            var dateIndex = labels.sales2021.indexOf(tempDate);
            
            salesHolder.sales2021[dateIndex] = salesHolder.sales2021[dateIndex] + tempSales;
        }

        var ctx = document.getElementById("pie-chart");

        var data = {
            labels: labels.sales2021,
            datasets: [
                {
                    label: "Sales",
                    data: salesHolder.sales2021,
                    backgroundColor: 'rgba(255, 197, 48, 0.5)'
                }
            ]
        };

        var chart = new Chart(ctx, {
            type: "pie",
            data: data,
            options:{},
        });        

    },
    error: function (data){
        console.log(data);
    }
});

