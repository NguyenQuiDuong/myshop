$(document).ready(function () {

    var engine = new Bloodhound({
        remote: {
            url: '/api/products/barcode/%QUERY%?typeahead=true',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $('#barcode_product').typeahead(
        {
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            source: engine.ttAdapter()
        }
    );
});
