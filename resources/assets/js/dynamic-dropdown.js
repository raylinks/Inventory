$(function(){
    dynamicDropdown('/api/category', '#category_id');
    $('#category_id').change(function(){
       let url= `/api/products/${this.value}`;
        let target = '#product_id';
        dynamicDropdown (url, target );
    });
});

function dynamicDropdown(url, selector){
    $.get(url, function (data){
        let $select =$(selector);

        $select.find('option').not(':first').remove();
        let options =[];
        $.each(data, function(index,item){
            options.push(`<option value="${item.id}">${item.category}</option>`);
        })
        $select.append(options);
    });
}