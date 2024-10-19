$(document).ready(function () {
	$(".pagetemplates").children().each(function () {
		objdiv = $(this);
		if (!objdiv.hasClass('iseditable') && !objdiv.find('.iseditable').length>0)
			objdiv.remove();
		else
			objdiv.removeClass("d-none");
			// we need to go over children also			
		objdiv.children().each(function () {
			objdiv2 = $(this);
			if (!objdiv2.hasClass('iseditable'))
				objdiv2.remove();
			else
				objdiv2.removeClass("d-none");

		});
	});
  window._token = $('meta[name="csrf-token"]').attr('content')

  moment.updateLocale('en', {
    week: {dow: 1} // Monday is the first day of the week
  })

  $('.date').datetimepicker({
    format: 'YYYY-MM-DD',
    locale: 'en',
    icons: {
      up: 'fas fa-chevron-up',
      down: 'fas fa-chevron-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right'
    }
  })

  $('.datetime').datetimepicker({
    format: 'YYYY-MM-DD HH:mm:ss',
    locale: 'en',
    sideBySide: true,
    icons: {
      up: 'fas fa-chevron-up',
      down: 'fas fa-chevron-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right'
    }
  })

  $('.timepicker').datetimepicker({
    format: 'HH:mm:ss',
    icons: {
      up: 'fas fa-chevron-up',
      down: 'fas fa-chevron-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right'
    }
  })

  $('.select-all').click(function () {
    let $select2 = $(this).parent().siblings('.select2')
    $select2.find('option').prop('selected', 'selected')
    $select2.trigger('change')
  })
  $('.deselect-all').click(function () {
    let $select2 = $(this).parent().siblings('.select2')
    $select2.find('option').prop('selected', '')
    $select2.trigger('change')
  })

  $('.select2').select2()

  $('.treeview').each(function () {
    var shouldExpand = false
    $(this).find('li').each(function () {
      if ($(this).hasClass('active')) {
        shouldExpand = true
      }
    })
    if (shouldExpand) {
      $(this).addClass('active')
    }
  })

  $('.c-header-toggler.mfs-3.d-md-down-none').click(function (e) {
    $('#sidebar').toggleClass('c-sidebar-lg-show');

    setTimeout(function () {
      $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
    }, 400);
  });

})
