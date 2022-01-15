$('.btn-overlay').on('click', function (e) {
    $('.overlay').removeClass('overlay-hidden');
});

$('.btn-save').on('click', function (e) {
    $('.overlay').removeClass('overlay-hidden');
});

$.notifyDefaults({
    z_index: 100000
});

$('.form-error').each(function (index) {
    $.notify({message: $(this).text()}, {type: 'danger'});
});

function dynamicColors(total) {
    let colors = [];

    for (let i = 0; i <= total; i++) {
        let r = Math.floor(Math.random() * 127);
        let g = Math.floor(Math.random() * 128);
        let b = Math.floor(Math.random() * 255);

        colors.push(`rgba(${r}, ${g}, ${b}, ${1})`);
    }

    return colors;
}

function pieChart(id, label, response, type = 'pie') {
    let chartCanvas = document.getElementById(id).getContext('2d');
    let chart = new Chart(chartCanvas, {
        type: type,
        data: {
            labels: response.data.labels,
            datasets: [{
                label: label,
                data: response.data.data,
                backgroundColor: dynamicColors(response.data.data.length),
                hoverOffset: 4
            }]
        }
    });
}
