/**
* Theme: Minimage - Tailwind Image Gallery Template
* Author: MyraStudio
* Module/App: dashboard js
*/


"use strict";

// chart1
var options = {
    series: [{ name: "Desktops", data: [15, 35, 40, 60, 25, 35, 80, 70, 45, 55, 80, 70, 25, 25] }],
    chart: { height: 45, type: "area", sparkline: { enabled: true }, animations: { enabled: false }, dropShadow: { enabled: true, top: 10, left: 0, bottom: 10, blur: 2, color: "#f3f4f6", opacity: 0.3 } }, // Tailwind gray-200
    colors: ["#f87171"], // Tailwind red-400
    fill: { type: "gradient", gradient: { shadeIntensity: 1, opacityFrom: 0.5, opacityTo: 0.1, stops: [0, 90, 100] } },
    tooltip: { enabled: false },
    dataLabels: { enabled: false },
    grid: { show: false },
    xaxis: { labels: { show: false }, axisBorder: { show: false }, axisTicks: { show: false } },
    yaxis: { show: false },
    stroke: { curve: "smooth", width: 2 }
};

var chart = new ApexCharts(document.querySelector("#chart1"), options);
chart.render();


// chart2
var options = {
    series: [{ name: "Desktops", data: [15, 35, 40, 60, 25, 35, 80, 70, 45, 55, 80, 70, 25, 25] }],
    chart: { height: 45, type: "area", sparkline: { enabled: true }, animations: { enabled: false }, dropShadow: { enabled: true, top: 10, left: 0, bottom: 10, blur: 2, color: "#f3f4f6", opacity: 0.3 } }, // Tailwind gray-200
    colors: ["#f87171"], // Tailwind red-400
    fill: { type: "gradient", gradient: { shadeIntensity: 1, opacityFrom: 0.5, opacityTo: 0.1, stops: [0, 90, 100] } },
    tooltip: { enabled: false },
    dataLabels: { enabled: false },
    grid: { show: false },
    xaxis: { labels: { show: false }, axisBorder: { show: false }, axisTicks: { show: false } },
    yaxis: { show: false },
    stroke: { curve: "smooth", width: 2 }
};

var chart = new ApexCharts(document.querySelector("#chart2"), options);
chart.render();


// chart3
var options = {
    series: [{ name: "Desktops", data: [15, 35, 40, 60, 25, 35, 80, 70, 45, 55, 80, 70, 25, 25] }],
    chart: { height: 45, type: "area", sparkline: { enabled: true }, animations: { enabled: false }, dropShadow: { enabled: true, top: 10, left: 0, bottom: 10, blur: 2, color: "#f3f4f6", opacity: 0.3 } }, // Tailwind gray-200
    colors: ["#f87171"], // Tailwind red-400
    fill: { type: "gradient", gradient: { shadeIntensity: 1, opacityFrom: 0.5, opacityTo: 0.1, stops: [0, 90, 100] } },
    tooltip: { enabled: false },
    dataLabels: { enabled: false },
    grid: { show: false },
    xaxis: { labels: { show: false }, axisBorder: { show: false }, axisTicks: { show: false } },
    yaxis: { show: false },
    stroke: { curve: "smooth", width: 2 }
};

var chart = new ApexCharts(document.querySelector("#chart3"), options);
chart.render();


// chart4
var options = {
    series: [{ name: "Desktops", data: [45, 30, 70, 55, 40, 25, 80, 90, 50, 45, 70, 80, 60, 50] }],
    chart: {
        height: 45, type: "area",
        sparkline: { enabled: true },
        animations: { enabled: false },
        dropShadow: { enabled: true, top: 10, left: 0, bottom: 10, blur: 2, color: "#d1d5db", opacity: 0.3 } // Tailwind gray-400
    },
    colors: ["#10b981"], // Tailwind green-500
    fill: { type: "gradient", gradient: { shadeIntensity: 1, opacityFrom: 0.6, opacityTo: 0.2, stops: [0, 90, 100] } },
    tooltip: { enabled: false },
    dataLabels: { enabled: false },
    grid: { show: false },
    xaxis: { labels: { show: false }, axisBorder: { show: false }, axisTicks: { show: false } },
    yaxis: { show: false },
    stroke: { curve: "smooth", width: 2 }
};

var chart = new ApexCharts(document.querySelector("#chart4"), options);
chart.render();




// chart5 (Radial)
var options = {
    chart: {
        type: 'radialBar',
        height: 295,
        dropShadow: {
            enabled: true,
            top: 5,
            left: 0,
            bottom: 0,
            right: 0,
            blur: 5,
            color: '#45404a2e',
            opacity: 0.35
        },
    },
    plotOptions: {
        radialBar: {
            offsetY: -10,
            startAngle: 0,
            endAngle: 270,
            hollow: {
                margin: 5,
                size: '50%',
                background: 'transparent',
            },
            track: {
                show: false,
            },
            dataLabels: {
                name: {
                    fontSize: '18px',
                },
                value: {
                    fontSize: '16px',
                    color: '#50649c',
                },

            }
        },
    },
    colors: ["#2a76f4", "rgba(42, 118, 244, .5)", "rgba(42, 118, 244, .18)"],
    stroke: {
        lineCap: 'round'
    },
    series: [71, 63, 100],
    labels: ['Completed', 'Active', 'Assigned'],
    legend: {
        show: false,
    },
    responsive: [{
        breakpoint: 480,
        options: {
            legend: {
                show: false,
                floating: true,
                position: 'left',
                offsetX: 10,
                offsetY: 0,
            }
        }
    }]
}

var chart = new ApexCharts(document.querySelector("#chart5"), options);
chart.render();


// chart6 (Line chart)
var options = {
    chart: {
        height: 330,
        type: "area",
        toolbar: {
            show: false,
        },
        dropShadow: {
            enabled: true,
            top: 12,
            left: 0,
            bottom: 0,
            right: 0,
            blur: 2,
            color: "rgba(132, 145, 183, 0.3)",
            opacity: 0.35,
        },
    },
    colors: ["#f1a760", "#6d81f5"],
    dataLabels: {
        enabled: false,
    },
    stroke: {
        show: true,
        curve: "smooth",
        width: [2, 2],
        dashArray: [0, 4],
        lineCap: "round",
    },
    series: [
        {
            name: "Income",
            data: [35, 45, 30, 55, 35, 45, 30, 55, 35, 45, 30, 55],
        },
        {
            name: "Expenses",
            data: [10, 35, 15, 45, 35, 65, 55, 85, 75, 105, 95, 135],
        },
    ],

    labels: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
    ],

    yaxis: {

        labels: {
            formatter: function (value) {
                return value + "k";
            },
            offsetX: -12,
            offsetY: 0,
        },
    },
    grid: {
        strokeDashArray: 3,
        xaxis: {
            lines: {
                show: true,
            },
        },
        yaxis: {
            lines: {
                show: false,
            },
        },
    },
    legend: {
        show: false,
    },

    fill: {
        type: "gradient",
        gradient: {
            type: "vertical",
            shadeIntensity: 1,
            inverseColors: !1,
            opacityFrom: 0.05,
            opacityTo: 0.05,
            stops: [45, 100],
        },
    },
};

var chart = new ApexCharts(document.querySelector("#chart6"), options);
chart.render();
