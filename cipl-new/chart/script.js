Highcharts.chart('container0', {
  chart: {
    type: 'column',
    options3d: {
      enabled: true,
      alpha: 10,
      beta: 25,
      depth: 70
    }
  },
  title: {
    text: 'Turnover over the Years'
  },
  // subtitle: {
  //   text: 'Notice the difference between a 0 value and a null point'
  // },
  plotOptions: {
    column: {
      depth: 25
    }
  },
  xAxis: {
   categories: ['2007-08', '2008-09', '2009-10', '2010-11', '2011-12','2012-13','2013-14','2014-15','2015-16','2016-17','2017-18','2018-19'],
    labels: {
      skew3d: true,
      style: {
        fontSize: '16px'
      }
    },
     title: {
      text: 'Growth Charts ',
      skew3d: true
    }
  },
  yAxis: {
     title: {
      text: 'In INR Crores',
      skew3d: true
    }
  },
  series: [{
    name: 'In INR Crores',
    data: [50, 100, 150, 200, 250,300,350,400,450,500,550,600],
  }]
});

Highcharts.chart('container', {
  chart: {
    type: 'column',
    options3d: {
      enabled: true,
      alpha: 10,
      beta: 25,
      depth: 70
    }
  },
  title: {
    text: 'Manpower over the Years'
  },
  // subtitle: {
  //   text: 'Notice the difference between a 0 value and a null point'
  // },
  plotOptions: {
    column: {
      depth: 25
    }
  },
  xAxis: {
   categories: ['2007-08', '2008-09', '2009-10', '2010-11', '2011-12','2012-13','2013-14','2014-15','2015-16','2016-17','2017-18','2018-19'],
    labels: {
      skew3d: true,
      style: {
        fontSize: '16px'
      }
    },
     title: {
      text: 'Growth Charts ',
      skew3d: true
    }
  },
  yAxis: {
     title: {
      text: 'Manpower',
      skew3d: true
    }
  },
  series: [{
    name: 'Manpower',
     data: [100, 200, 300, 400, 500,600,700,800,900,1000,1100,1200],
  }]
});