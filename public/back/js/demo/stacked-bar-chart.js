// // Set new default font family and font color to mimic Bootstrap's default styling
// (Chart.defaults.global.defaultFontFamily = "Nunito"),
//     '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
// Chart.defaults.global.defaultFontColor = "#858796";

// function number_format(number, decimals, dec_point, thousands_sep) {
//     // *     example: number_format(1234.56, 2, ',', ' ');
//     // *     return: '1 234,56'
//     number = (number + "").replace(",", "").replace(" ", "");
//     var n = !isFinite(+number) ? 0 : +number,
//         prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
//         sep = typeof thousands_sep === "undefined" ? "," : thousands_sep,
//         dec = typeof dec_point === "undefined" ? "." : dec_point,
//         s = "",
//         toFixedFix = function (n, prec) {
//             var k = Math.pow(10, prec);
//             return "" + Math.round(n * k) / k;
//         };
//     // Fix for IE parseFloat(0.55).toFixed(0) = 0;
//     s = (prec ? toFixedFix(n, prec) : "" + Math.round(n)).split(".");
//     if (s[0].length > 3) {
//         s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
//     }
//     if ((s[1] || "").length < prec) {
//         s[1] = s[1] || "";
//         s[1] += new Array(prec - s[1].length + 1).join("0");
//     }
//     return s.join(dec);
// }
// //Ay Hesaplama
// function getLast6MonthsLabels() {
//     const labels = [];
//     const today = new Date();
//     const months = [
//         "Ocak",
//         "Şubat",
//         "Mart",
//         "Nisan",
//         "Mayıs",
//         "Haziran",
//         "Temmuz",
//         "Ağustos",
//         "Eylül",
//         "Ekim",
//         "Kasım",
//         "Aralık",
//     ];

//     for (let i = 5; i >= 0; i--) {
//         const pastDate = new Date(today);
//         pastDate.setMonth(today.getMonth() - i);

//         // Ayın adını almak
//         const monthName = months[pastDate.getMonth()];
//         labels.push(monthName);
//     }

//     return labels;
// }
// setTimeout(() => {
//     newChart(stackedBarChart, document.getElementById("stackedBarChart"));
// }, 100);
// var stackedBarChart;

// async function newChart(chart, ctx) {
//     chart = new Chart(ctx, {
//         type: "bar",
//         data: {
//             labels: ["January", "February", "March", "April", "May", "June", "July"],
//             datasets:  [
//                 {
//                   label: 'Dataset 1',
//                   data: 50,
//                   backgroundColor: red,
//                   stack: 'Stack 0',
//                 },
//                 {
//                   label: 'Dataset 2',
//                   data: 100,
//                   backgroundColor: blue,
//                   stack: 'Stack 0',
//                 },
//                 {
//                   label: 'Dataset 3',
//                   data: 10,
//                   backgroundColor: green,
//                   stack: 'Stack 1',
//                 },
//               ],
//         },
//         options: {
//             plugins: {
//                 title: {
//                     display: true,
//                     text: "Chart.js Bar Chart - Stacked",
//                 },
//             },
//             responsive: true,
//             interaction: {
//                 intersect: false,
//             },
//             scales: {
//                 x: {
//                     stacked: true,
//                 },
//                 y: {
//                     stacked: true,
//                 },
//             },
//         },
//     });
// }
