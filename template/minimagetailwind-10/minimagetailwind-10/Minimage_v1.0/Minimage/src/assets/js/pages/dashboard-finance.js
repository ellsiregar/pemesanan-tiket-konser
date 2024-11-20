// Income Chart
let incomeOptions = {
    series: [{
        data: [40, 32, 45, 65, 23, 54, 23]
    }],

    chart: {
        height: 350,
        type: 'bar',
        toolbar: {
            show: false,
        }
    },

    colors: ["#1BD5FE"],

    fill: {
        type: "gradient",
        gradient: {
            type: "vertical",
            shadeIntensity: 1,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 100],
            gradientToColors: ["#216BDB"]
        }
    },

    plotOptions: {
        bar: {
            columnWidth: 30,
            borderRadius: 6,
        }
    },

    dataLabels: {
        enabled: false,
    },

    xaxis: {
        categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        position: 'bottom',
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        crosshairs: {
            show: false,
        },
        tooltip: {
            enabled: false,
        }
    },

    yaxis: {
        labels: {
            show: true,
            offsetX: 0
        },
        min: 0, // Set the min and max as actual category values.
        max: 70,
        tickAmount: 3,
    },

    grid: {
        show: true,
        padding: { left: 0, right: 0, top: 0, bottom: 0 },
    },

    tooltip: {
        enabled: true,
    },
};

let incomeChartContainer = document.querySelector("#chart1");
let incomeChart = incomeChartContainer && new ApexCharts(incomeChartContainer, incomeOptions);
incomeChart && incomeChart.render();


// 

// Expense Chart
let expenseOptions = {
    series: [{
        data: [40, 32, 45, 65, 23, 54, 23]
    }],

    chart: {
        height: 350,
        type: 'bar',
        toolbar: {
            show: false,
        },
    },

    colors: ["#FFBB54"],

    fill: {
        type: "gradient",
        gradient: {
            type: "vertical",
            shadeIntensity: 1,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 100],
            gradientToColors: ["#FF3300"]
        }
    },

    plotOptions: {
        bar: {
            columnWidth: 30,
            borderRadius: 6,
        }
    },

    dataLabels: {
        enabled: false,
    },

    xaxis: {
        categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        position: 'bottom',
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        crosshairs: {
            show: false,
        },
        tooltip: {
            enabled: false,
        }
    },

    yaxis: {
        labels: {
            show: true,
            offsetX: 0
        },
        min: 0, // Set the min and max as actual category values.
        max: 70,
        tickAmount: 3,
    },

    grid: {
        show: true,
        padding: { left: 0, right: 0, top: 0, bottom: 0 },
    },

    tooltip: {
        enabled: true,
    },
};

let expenseChartContainer = document.querySelector("#chart2");
let expenseChart = expenseChartContainer && new ApexCharts(expenseChartContainer, expenseOptions);
expenseChart && expenseChart.render();