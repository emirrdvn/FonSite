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
//Ay Hesaplama
function getLast6MonthsLabels() {
    const labels = [];
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

    for (let i = 5; i >= 0; i--) {
        const pastDate = new Date(today);
        pastDate.setMonth(today.getMonth() - i);

        // Ayın adını almak
        const monthName = months[pastDate.getMonth()];
        labels.push(monthName);
    }

    return labels;
}

setTimeout(() => {
    newChart(
        myBarChart1,
        [
            4222718443, 2222718443, 3222718443, 3522718443, 1222718443,
            2922718443,
        ],
        getLast6MonthsLabels(),
        document.getElementById("FonToplamDegerBarChart"),
        0,
        5222718443,
        "₺",
        "Toplam Değer"
    );
    newChart(
        myBarChart2,
        fonYatirimciSayisiMonthlyBarChart,
        getLast6MonthsLabels(),
        document.getElementById("YatirimciBarChart"),
        0,
        80000,
        "",
        "Yatırımcı Sayısı"
    );
    newChart(
        myBarChart3,
        fonPayAdetMonthlyBarChart,
        getLast6MonthsLabels(),
        document.getElementById("PayAdetBarChart"),
        0,
        800000000,
        "",
        "Dolaşımdaki Pay Adeti"
    );
    // newChart(
    //     myBarChart4,
    //     dataforchart.slice(0, 365).reverse(),
    //     Array.from({ length: 365 }, (_, i) => i + 1),
    //     document.getElementById("myAreaYillikChart")
    // );
}, 100);
console.log(fonPayAdetMonthlyBarChart);

var myBarChart1, myBarChart2, myBarChart3, myBarChart4;

async function newChart(
    chart,
    useThisData,
    LabelData,
    ctx,
    min,
    max,
    birim,
    tooltipLabel
) {
    chart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: LabelData,
            datasets: [
                {
                    label: tooltipLabel,
                    backgroundColor: "#515151",
                    hoverBackgroundColor: "#090a09",
                    borderColor: "#4e73df",
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
                            unit: "month",
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            maxTicksLimit: 6,
                        },
                        maxBarThickness: 25,
                    },
                ],
                yAxes: [
                    {
                        ticks: {
                            min: min || 0,
                            max: max || 5222718443,
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a dollar sign in the ticks
                            callback: function (value, index, values) {
                                return birim + number_format(value);
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
                titleMarginBottom: 10,
                titleFontColor: "#6e707e",
                titleFontSize: 14,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: "#dddfeb",
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel =
                            chart.datasets[tooltipItem.datasetIndex].label ||
                            "";
                        return (
                            datasetLabel +
                            ": " +
                            birim +
                            number_format(tooltipItem.yLabel)
                        );
                    },
                },
            },
        },
    });
}
