// Set new default font family and font color to mimic Bootstrap's default styling
(Chart.defaults.global.defaultFontFamily = "Nunito"),
    '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#858796";

function number_format(number, decimals, dec_point, thousands_sep) {
    // *     example: number_format(1234.56, 2, ',', ' ');
    // *     return: '1 234,56'
    number = (number + "").replace(",", "").replace(" ", "");
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = typeof thousands_sep === "undefined" ? "," : thousands_sep,
        dec = typeof dec_point === "undefined" ? "." : dec_point,
        s = "",
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return "" + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : "" + Math.round(n)).split(".");
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || "").length < prec) {
        s[1] = s[1] || "";
        s[1] += new Array(prec - s[1].length + 1).join("0");
    }
    return s.join(dec);
}

//Gün Hesaplama
function getLast7DaysLabels() {
    const labels = [];
    const today = new Date();
    const daysOfWeek = [
        "Pazar",
        "Pazartesi",
        "Salı",
        "Çarşamba",
        "Perşembe",
        "Cuma",
        "Cumartesi",
    ];

    for (let i = 6; i >= 0; i--) {
        const pastDate = new Date(today);
        pastDate.setDate(today.getDate() - i);

        // Haftanın gününün adını almak
        const dayName = daysOfWeek[pastDate.getDay()];
        labels.push(dayName);
    }

    return labels;
}
//3 Ay Hesaplama
function getLast90Days() {
    const daysArray = [];
    const today = new Date();
    const months = [
        "Ocak",
        "Şubat",
        "Mart",
        "Nisan",
        "Mayıs",
        "Haziran",
        "Temmuz",
        "Ağustos",
        "Eylül",
        "Ekim",
        "Kasım",
        "Aralık",
    ];

    for (let i = 0; i < 90; i++) {
        const pastDate = new Date(today);
        pastDate.setDate(today.getDate() - i);

        // Gün, ay ve yıl formatında tarih oluştur
        const day = pastDate.getDate();
        const month = months[pastDate.getMonth()];
        const year = pastDate.getFullYear();

        daysArray.push(`${day} ${month} ${year}`);
    }

    return daysArray.reverse();
}
function getLast30Days() {
    const daysArray = [];
    const today = new Date();
    const months = [
        "Ocak",
        "Şubat",
        "Mart",
        "Nisan",
        "Mayıs",
        "Haziran",
        "Temmuz",
        "Ağustos",
        "Eylül",
        "Ekim",
        "Kasım",
        "Aralık",
    ];

    for (let i = 0; i < 30; i++) {
        const pastDate = new Date(today);
        pastDate.setDate(today.getDate() - i);

        // Gün, ay ve yıl formatında tarih oluştur
        const day = pastDate.getDate();
        const month = months[pastDate.getMonth()];

        daysArray.push(`${day} ${month}`);
    }

    return daysArray.reverse();
}

// Area Chart Example




newChart(myLineChart1,yedigunluk.reverse(), getLast7DaysLabels(),document.getElementById("myAreaChart"));
newChart(myLineChart2,otuzgunluk.reverse(), getLast30Days(),document.getElementById("myAreaAylikChart"));
newChart(myLineChart3,doksangunluk.reverse(), getLast90Days(),document.getElementById("myAreaUcAylikChart"));
newChart(myLineChart4,yillik.reverse(), Array.from({ length: 365 }, (_, i) => i + 1),document.getElementById("myAreaYillikChart"));
newChart(myLineChart5,ucyillik.reverse(), Array.from({ length: 365 * 3 }, (_, i) => i + 1),document.getElementById("myAreaUcYillikChart"));

 


var myLineChart1, myLineChart2, myLineChart3, myLineChart4,myLineChart5;

async function newChart(chart,useThisData, LabelData,ctx) {
    
    if (chart) chart.destroy();

    chart = await new Chart(ctx, {
        type: "line",
        data: {
            labels: LabelData, //["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [
                {
                    label: "Fiyat",
                    lineTension: 0.3,
                    backgroundColor: "rgba(0, 0, 0, 0.07)",
                    borderColor: "rgba(0, 0, 0, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(0, 0, 0, 1)",
                    pointBorderColor: "rgba(0, 0, 0, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(255, 255, 255, 1)",
                    pointHoverBorderColor: "rgba(255, 255, 255, 0.5)",
                    pointHitRadius: 5,
                    pointBorderWidth: 2,
                    data: useThisData,
                },
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0,
                },
            },
            scales: {
                xAxes: [
                    {
                        time: {
                            unit: "date",
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            maxTicksLimit: 30,
                        },
                    },
                ],
                yAxes: [
                    {
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a dollar sign in the ticks
                            callback: function (value, index, values) {
                                return number_format(value) + "₺";
                            },
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2],
                        },
                    },
                ],
            },
            legend: {
                display: false,
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: "#6e707e",
                titleFontSize: 14,
                borderColor: "#dddfeb",
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: "index",
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel =
                            chart.datasets[tooltipItem.datasetIndex].label ||
                            "";
                        return (
                            datasetLabel +
                            ": " +
                            number_format(tooltipItem.yLabel) +
                            "₺"
                        );
                    },
                },
            },
        },
    });
}
