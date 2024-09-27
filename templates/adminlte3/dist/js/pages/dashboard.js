/*
 * Author: Abdullah A Almsaeed
 * Date: 4 Jan 2014
 * Description:
 *      This is a demo file used only for the main dashboard (index.html)
 **/

/* global moment:false, Chart:false, Sparkline:false */

$(function () {
  'use strict'

  // Visit graph chart
  var visitGraphChartCanvas = $('#line-chart').get(0).getContext('2d')
  // $('#revenue-chart').get(0).getContext('2d');

  var visitGraphChartData = {
    // labels: ['2011 Q1', '2011 Q2', '2011 Q3', '2011 Q4', '2012 Q1', '2012 Q2', '2012 Q3', '2012 Q4', '2013 Q1', '2013 Q2'],
    labels: labels,
    datasets: [
      {
        label: 'Daily Visits',
        fill: false,
        borderWidth: 2,
        lineTension: 0,
        spanGaps: true,
        borderColor: '#cfcfcf',
        pointRadius: 3,
        pointHoverRadius: 7,
        pointColor: '#000',
        pointBackgroundColor: '#000',
        data: [10000, 2778, 4912, 3767, 6810, 5670, 4820, 15073, 10687, 8432]
      }
    ]
  }

  var visitGraphChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        ticks: {
          fontColor: '#17a2b8'
        },
        gridLines: {
          display: false,
          color: '#17a2b8',
          drawBorder: false
        }
      }],
      yAxes: [{
        ticks: {
          stepSize: 5000,
          fontColor: '#17a2b8'
        },
        gridLines: {
          display: true,
          color: '#17a2b8',
          drawBorder: false
        }
      }]
    }
  }
  // This will get the first returned node in the jQuery collection.
  // eslint-disable-next-line no-unused-vars
  var visitGraphChart = new Chart(visitGraphChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'line',
    data: visitGraphChartData,
    options: visitGraphChartOptions
  });
});
