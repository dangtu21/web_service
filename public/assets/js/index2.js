$(function() {
    "use strict";


    // chart 1

    var options = {
        chart: {
            height: 350,
            type: 'line',
            stacked: false,
            foreColor: 'rgba(255, 255, 255, 0.75)',
            toolbar: {
                show: false
            },
            dropShadow: {
                enabled: false,
                opacity: 0.1,
                blur: 3,
                left: -7,
                top: 22,
            }
        },
        plotOptions: {
            bar: {
                columnWidth: '30%',
                endingShape: 'rounded',
                dataLabels: {
                    position: 'top', // top, center, bottom
                },
            }
        },
        dataLabels: {
            enabled: false,
            formatter: function(val) {
                return parseInt(val);
            },
            offsetY: -20,
            style: {
                fontSize: '14px',
                colors: ["#fff"]
            }
        },
        stroke: {
            show: true,
            width: [4, 4],
            dashArray: [0, 3],
            curve: 'smooth'
                // colors: ['transparent']
        },
        grid: {
            show: true,
            borderColor: 'rgba(255, 255, 255, 0.12)',
        },
        series: [{
            name: 'Revenue',
            data: [50, 80, 37, 70, 41, 98, 53, 40, 66, 75, 55, 60]
        }],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },

        colors: ["#fff"],
        tooltip: {
            theme: 'dark',
            y: {
                formatter: function(val) {
                    return " " + val + "$"
                }
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    height: 330,
                    stacked: true,
                },
                legend: {
                    show: !0,
                    position: "bottom",
                    horizontalAlign: "center",
                    offsetX: -20,
                    fontSize: "10px",
                    markers: {
                        radius: 50,
                        width: 10,
                        height: 10
                    }
                },
                plotOptions: {
                    bar: {
                        columnWidth: '30%'
                    }
                }
            }
        }]
    }

    var chart = new ApexCharts(
        document.querySelector("#chart1"),
        options
    );

    chart.render();




    // chart 2

    var options = {
        chart: {
            height: 300,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                //startAngle: -135,
                //endAngle: 135,
                hollow: {
                    margin: 0,
                    size: '45%',
                    background: 'transparent',
                    image: undefined,
                    imageOffsetX: 0,
                    imageOffsetY: 0,
                    position: 'front',
                    dropShadow: {
                        enabled: false,
                        top: 3,
                        left: 0,
                        blur: 4,
                        opacity: 0.24
                    }
                },
                track: {
                    background: 'rgba(255, 255, 255, 0.12)',
                    strokeWidth: '50%',
                    margin: 12, // margin is in pixels
                    dropShadow: {
                        enabled: false,
                        top: -3,
                        left: 0,
                        blur: 4,
                        opacity: 0.35
                    }
                },
                dataLabels: {
                    name: {
                        color: '#fff',
                        fontSize: '14px',
                        offsetY: -5
                    },
                    value: {
                        color: '#fff',
                        fontSize: '25px',
                        offsetY: 5
                    },
                    total: {
                        show: true,
                        label: 'Total',
                        color: '#fff',
                        formatter: function(w) {
                            // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                            return 300
                        }
                    }
                }
            }
        },
        stroke: {
            lineCap: "butt",
        },
        colors: ["#fff", "#fff", "#fff"],
        series: [90, 80, 60],
        labels: ['Complete', 'In Progress', 'Started'],
        responsive: [{
            breakpoint: 1280,
            options: {
                chart: {
                    height: 350
                }
            }
        }]

    }

    var chart = new ApexCharts(
        document.querySelector("#chart2"),
        options
    );

    chart.render();




    // chart 3

    var options = {
        chart: {
            height: 220,
            type: 'radialBar',
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            radialBar: {
                //startAngle: -240,
                //endAngle: 120,
                hollow: {
                    margin: 0,
                    size: '80%',
                    //background: '#000',
                    image: '{{ asset("assets/images/icons/shoping-cart.png")}}',
                    imageWidth: 45,
                    imageHeight: 45,
                    imageClipped: false
                },
                track: {
                    background: 'rgba(255, 255, 255, 0.12)',
                    strokeWidth: '100%',
                    margin: 0, // margin is in pixels
                    dropShadow: {
                        enabled: false,
                        top: -3,
                        left: 0,
                        blur: 4,
                        opacity: 0.35
                    }
                },

                dataLabels: {
                    showOn: 'always',
                    name: {
                        offsetY: -10,
                        show: false,
                        color: '#fff',
                        fontSize: '17px'
                    },
                    value: {
                        formatter: function(val) {
                            return parseInt(val);
                        },
                        color: '#fff',
                        fontSize: '36px',
                        show: false,
                    }
                }
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                type: 'vertical',
                shadeIntensity: 0.5,
                gradientToColors: ['#fff'],
                inverseColors: false,
                opacityFrom: 1,
                opacityTo: 1,
                //stops: [0, 100]
            }
        },
        colors: ["#fff"],
        series: [75],
        stroke: {
            lineCap: 'round'
        },
        labels: ['Percent'],

    }

    var chart = new ApexCharts(
        document.querySelector("#chart3"),
        options
    );

    chart.render();




    // chart 4

    var options = {
        chart: {
            height: 220,
            type: 'radialBar',
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            radialBar: {
                //startAngle: -240,
                //endAngle: 120,
                hollow: {
                    margin: 0,
                    size: '80%',
                    //background: '#000',
                    image: 'assets/images/icons/bx-group.png',
                    imageWidth: 45,
                    imageHeight: 45,
                    imageClipped: false
                },
                track: {
                    background: 'rgba(255, 255, 255, 0.12)',
                    strokeWidth: '100%',
                    margin: 0, // margin is in pixels
                    dropShadow: {
                        enabled: false,
                        top: -3,
                        left: 0,
                        blur: 4,
                        opacity: 0.35
                    }
                },

                dataLabels: {
                    showOn: 'always',
                    name: {
                        offsetY: -10,
                        show: false,
                        color: '#fff',
                        fontSize: '17px'
                    },
                    value: {
                        formatter: function(val) {
                            return parseInt(val);
                        },
                        color: '#fff',
                        fontSize: '36px',
                        show: false,
                    }
                }
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                type: 'vertical',
                shadeIntensity: 0.5,
                gradientToColors: ['#fff'],
                inverseColors: false,
                opacityFrom: 1,
                opacityTo: 1,
                //stops: [0, 100]
            }
        },
        colors: ["#fff"],
        series: [55],
        stroke: {
            lineCap: 'round'
        },
        labels: ['Percent'],

    }

    var chart = new ApexCharts(
        document.querySelector("#chart4"),
        options
    );

    chart.render();



    // chart 5

    var options = {
        chart: {
            height: 220,
            type: 'radialBar',
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            radialBar: {
                //startAngle: -240,
                //endAngle: 120,
                hollow: {
                    margin: 0,
                    size: '80%',
                    //background: '#000',
                    image: 'assets/images/icons/line-chart.png',
                    imageWidth: 45,
                    imageHeight: 45,
                    imageClipped: false
                },
                track: {
                    background: 'rgba(255, 255, 255, 0.12)',
                    strokeWidth: '100%',
                    margin: 0, // margin is in pixels
                    dropShadow: {
                        enabled: false,
                        top: -3,
                        left: 0,
                        blur: 4,
                        opacity: 0.35
                    }
                },

                dataLabels: {
                    showOn: 'always',
                    name: {
                        offsetY: -10,
                        show: false,
                        color: '#fff',
                        fontSize: '17px'
                    },
                    value: {
                        formatter: function(val) {
                            return parseInt(val);
                        },
                        color: '#fff',
                        fontSize: '36px',
                        show: false,
                    }
                }
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                type: 'vertical',
                shadeIntensity: 0.5,
                gradientToColors: ['#fff'],
                inverseColors: false,
                opacityFrom: 1,
                opacityTo: 1,
                //stops: [0, 100]
            }
        },
        colors: ["#fff"],
        series: [68],
        stroke: {
            lineCap: 'round'
        },
        labels: ['Percent'],

    }

    var chart = new ApexCharts(
        document.querySelector("#chart5"),
        options
    );

    chart.render();



    // chart 6

    var options = {
        chart: {
            height: 220,
            type: 'radialBar',
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            radialBar: {
                //startAngle: -240,
                //endAngle: 120,
                hollow: {
                    margin: 0,
                    size: '80%',
                    //background: '#000',
                    image: 'assets/images/icons/followers.png',
                    imageWidth: 45,
                    imageHeight: 45,
                    imageClipped: false
                },
                track: {
                    background: 'rgba(255, 255, 255, 0.12)',
                    strokeWidth: '100%',
                    margin: 0, // margin is in pixels
                    dropShadow: {
                        enabled: false,
                        top: -3,
                        left: 0,
                        blur: 4,
                        opacity: 0.35
                    }
                },

                dataLabels: {
                    showOn: 'always',
                    name: {
                        offsetY: -10,
                        show: false,
                        color: '#fff',
                        fontSize: '17px'
                    },
                    value: {
                        formatter: function(val) {
                            return parseInt(val);
                        },
                        color: '#fff',
                        fontSize: '36px',
                        show: false,
                    }
                }
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                type: 'vertical',
                shadeIntensity: 0.5,
                gradientToColors: ['#fff'],
                inverseColors: false,
                opacityFrom: 1,
                opacityTo: 1,
                //stops: [0, 100]
            }
        },
        colors: ["#fff"],
        series: [85],
        stroke: {
            lineCap: 'round'
        },
        labels: ['Percent'],

    }

    var chart = new ApexCharts(
        document.querySelector("#chart6"),
        options
    );

    chart.render();




    // chart 7

    var options1 = {
        chart: {
            type: 'area',
            height: 90,
            sparkline: {
                enabled: true
            }
        },
        dataLabels: {
            enabled: false
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                type: 'vertical',
                shadeIntensity: 0.5,
                gradientToColors: ['#fff'],
                inverseColors: false,
                opacityFrom: 0.7,
                opacityTo: 0.1,
                //stops: [0, 100]
            }
        },
        colors: ["#fff"],
        series: [{
            name: 'Facebook Followers',
            data: [25, 66, 41, 59, 25, 44, 12, 36, 9, 21]
        }],
        stroke: {
            width: 2.5,
            curve: 'smooth',
            dashArray: [0]
        },
        tooltip: {
            theme: 'dark',
            x: {
                show: false
            },

        }
    }

    new ApexCharts(document.querySelector("#chart7"), options1).render();




    // chart 8

    var options1 = {
        chart: {
            type: 'bar',
            height: 90,
            sparkline: {
                enabled: true
            }
        },
        dataLabels: {
            enabled: false
        },
        plotOptions: {
            bar: {
                columnWidth: '50%',
                endingShape: 'rounded',
                dataLabels: {
                    position: 'top', // top, center, bottom
                },
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                type: 'vertical',
                shadeIntensity: 0.5,
                gradientToColors: ['#fff'],
                inverseColors: false,
                opacityFrom: 0.8,
                opacityTo: 0.1,
                //stops: [0, 100]
            }
        },
        colors: ["#fff"],
        series: [{
            name: 'Twitter Followers',
            data: [25, 66, 41, 59, 25, 44, 12, 36, 9, 21]
        }],
        stroke: {
            width: 2.5,
            curve: 'smooth',
            dashArray: [0]
        },
        tooltip: {
            theme: 'dark',
            x: {
                show: false
            },

        }
    }

    new ApexCharts(document.querySelector("#chart8"), options1).render();



    // chart 9

    var options1 = {
        chart: {
            type: 'line',
            height: 90,
            sparkline: {
                enabled: true
            }
        },
        dataLabels: {
            enabled: false
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                type: 'vertical',
                shadeIntensity: 0.5,
                gradientToColors: ['#fff'],
                inverseColors: false,
                opacityFrom: 1,
                opacityTo: 1,
                //stops: [0, 100]
            }
        },
        colors: ["#fff"],
        series: [{
            name: 'Youtube Subscribers',
            data: [12, 14, 2, 47, 32, 44, 14, 55, 41, 69]
        }],
        stroke: {
            width: 2.5,
            curve: 'smooth',
            dashArray: [0]
        },
        tooltip: {
            theme: 'dark',
            x: {
                show: false
            },

        }
    }

    new ApexCharts(document.querySelector("#chart9"), options1).render();



    // worl map

    $(function() {

        $('#world-map').vectorMap({

            backgroundColor: 'transparent',
            borderColor: '#818181',
            borderOpacity: 0.25,
            regionStyle: {
                initial: {
                    fill: '#fff'
                }
            },

            onRegionClick: function(event, code) {
                code = code.toLowerCase();
                if (countries.indexOf(code) == -1)
                    code = 'us';
                window.location = 'http://www.microstrategy.com/' + code;
            },
            series: {
                regions: [{
                    values: {
                        IN: '#b659ff',
                        US: '#2ccc72',
                        RU: '#5a52db',
                        AU: '#f09c15'
                    }
                }]
            }

        });

    })






});