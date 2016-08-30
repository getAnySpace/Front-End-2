var customselect = {
	SLIDE_SPEED: 250,
	KEY_UP: 38,
	KEY_DOWN: 40,
	KEY_ENTER: 13,
	KEY_ESCAPE: 27,
	KEY_BACKSPACE: 8,
	MAX_ELAPSED_KEY: 1000,
	
	init: function(selector) {
		jQuery(selector).each(function() {
			customselect.create(jQuery(this));
		});
	},
	
	create_multiple: function(jq) {				
		function close_box() {
			cslist.stop().slideUp(customselect.SLIDE_SPEED);
			box_open = false;
		}
		function open_box() {
			if (jq.is(':disabled'))
				return;
			cslist.attr('style','display: none').slideDown(customselect.SLIDE_SPEED);
			box_open = true;
		}
		function check_close() {
			if (box_open && !box_focused && !list_focused && !list_item_focused) {
				close_box();		
			}
		}
		function create_li(value, text, selected_values) {
			var li = jQuery('<li><input type="checkbox" value="' + value + '" data-label="' + text + '" />' + text + '</li>');
			var li_chk = li.children('input');
			
			for (var i in selected_values) {
				if (selected_values[i] == value) {
					li.addClass('selected');
					li_chk.attr('checked','checked');					
					break;	
				}
			}
			
			li_chk.focus(function() {
				list_item_focused = true;
			}).blur(function() {
				list_item_focused = false;
			}).change(function() {
				var is_selected = li_chk.is(':checked');
				
				if (is_selected)
					li.addClass('selected');
				else
					li.removeClass('selected');
					
				update_value();						
								
			}).click(function(e) {
				e.stopPropagation();
			});
			
			li.click(function() {
				li_chk.click();				
			});
			
			return li;
		}
		function update_value() {
			var label = "";
			var val = [];
			cslist.find('input:checked').each(function() {
				var jq_inp = jQuery(this);
				val.push( jq_inp.val() );
				label = jq_inp.data('label');
			});	
			jq.val(val);
			
			if (val.length > 1)
				label = "Multiple";
				
			csbox.html(label);
		}
		
		var box_focused = false,
			list_focused = false,
			list_item_focused = false,
			box_open = false;

		var csbox = jQuery('<div class="csbox" tabindex="0"></div>');
		var cslist = jQuery('<ul class="cslist" tabindex="0"></ul>');
		
		var container = jQuery('<div class="customselect"></div>');
		container.addClass(jq.attr('class'));
		container.append(csbox).append(cslist); 
		
		jq.hide();
		jq.after(container);
		
		var current_val = jq.val();		
		if (!current_val)
			current_val = [];
		
		var options = jq.children();
		for (var i=0; i<options.length; i++) {
			var opt = jQuery(options[i]);
			var v = opt.val();
			var li_text = opt.text();
						
			cslist.append( create_li(v, li_text, current_val) );
		}
		
		update_value();
		
		csbox.mousedown(function() {
			if (box_focused) {
				if (!box_open)
					open_box();
				else
					close_box();	
			}				
		}).focus(function() {
			box_focused = true;
			if (!box_open)
				open_box();
			else
				close_box();
		}).blur(function() {
			box_focused = false;
		});
		
		cslist.focus(function() {
			list_focused = true;
		}).blur(function() {
			list_focused = false;
		});
		
		setInterval(function() {
			check_close();
		}, 100);
	},
	
	create: function(jq, is_fixed) {
		if (jq.hasClass('nocustomselect'))
			return;
		if (jq.data('is_custom_select')) {
			
			return;
		}
		jq.data('is_custom_select', true);
		
		if (jq.attr('multiple') == 'multiple') {
			customselect.create_multiple(jq);
			return;	
		}
		
		if (typeof is_fixed == 'undefined') {
			is_fixed = false;
		}
		if (jq.hasClass('is_fixed')) {
			is_fixed = true;
		}
		
		var append_class = false;
		if (jq.hasClass('append-class'))
			append_class = true;
		
		var is_combobox = jq.hasClass('combobox');
		
		var is_url_list = jq.hasClass('url-list');
		
		jq.on('hide', function() {
			container.hide();
		});
		jq.on('show', function() {
			container.show();
		});
		
		function select_item(item) {
			item.addClass('selected');

			if (!is_combobox) {
				csbox.html(item.html());
			} else {
				csbox.val(item.text());	
			}
			
			if (item.data('value') != jq.val()) {
				jq.val(item.data('value'));
				jq.trigger('change');
				if (is_url_list && jq.val().length > 0) {
					location.href = jq.val();	
				} 
			}			
			
			if (append_class) {
				if (csbox.data('last-value')) {
					csbox.removeClass('value-' + csbox.data('last-value'));	
				}
				csbox.data('last-value', item.data('value'));
				csbox.addClass('value-' + item.data('value'));	
			}

			if (typeof item.position() == 'undefined')
				return;			
			var pos = item.position().top + cslist.scrollTop() + cslist.height() / -2;	
			cslist.scrollTop(pos);
		}
		function close_box() {
			if (csbox.hasClass('focused')) {
				csbox.removeClass('focused');
				cslist.stop().removeClass('opening').slideUp(customselect.SLIDE_SPEED);
			}
		}
		function list_move(dir, combobox_move) {
			if (typeof combobox_move == 'undefined')
				combobox_move = false;
			
			if (combobox_move) {
				var children = cslist.children(':visible');
				
				var selected_child = children.filter('.selected');
				
				if (selected_child.length == 0) {
					cslist.children('.selected').removeClass('selected');
					if (children.length > 0) {
						jQuery(children[0]).addClass('selected');
					}	
				} else {
					var selected_index = 0;
					for(var i=0; i<children.length; i++) {
						if (jQuery(children[i]).hasClass('selected')) {
							selected_index = i;	
						}	
					}
					var next_index = selected_index + dir;
					if (next_index < 0)
						next_index = children.length - 1;
					else if (next_index >= children.length)
						next_index = 0;
						
					selected_child.removeClass('selected');
					jQuery(children[next_index]).addClass('selected');
				}
				
			} else {				
				var index = jq.prop('selectedIndex');
				var children = cslist.children();
				
				var next_index = index + dir;
				if (next_index < 0)
					next_index = children.length - 1;
				else if (next_index >= children.length)
					next_index = 0;
					
				if (dir == 0) {
					cslist.find('.selected').removeClass('selected');
				} else {
					jQuery(children[index]).removeClass('selected');
				}
				
				var next = jQuery(children[next_index]);
				
				select_item(next);
			}
		}
		jq.on('customselect-update', function() {
			list_move(0);
		});
		
		jq.on('check_disabled', function() {
			check_disabled();
		});
		
		jq.on('refresh-list', function() {
			current_val = jq.val();		
			cslist.html('');	
			
			options = jq.children();
			selected_index = 0;
			for (var i=0; i<options.length; i++) {
				var opt = jQuery(options[i]);
				var c = '';
				var v = opt.val();
				var li_text = opt.text();
				li_text = li_text.replace('**', '<strong>');
				li_text = li_text.replace('**', '</strong>');
				
				var li = jQuery('<li data-value="' + v + '">' + li_text + '</li>');
				if (append_class)
					li.addClass('value-' + v);
				li.mousedown(function() {
					var me = jQuery(this);
					cslist.children().removeClass('selected');
					select_item(me);
					close_box();
				});
				cslist.append(li);
				if (v == current_val) {
					selected_index = i;
				}
			}
			if (options.length > 9)
				container.addClass('large-list');
			
			
			children = cslist.children();
			sel_item = jQuery(children[selected_index]);
			select_item(sel_item);
		});
		
		function list_search(s) {
			var t = new Date().getTime();
			var last_string = csbox.data('last_string');
			var last_time = parseInt(csbox.data('last_time'));
			if (isNaN(last_time)) 
				last_time = 0;
				
			if (t - last_time > customselect.MAX_ELAPSED_KEY) {
				last_time = t;
				last_string = "";
			}
			if (s == 'backspace') {
				last_string = last_string.substr(0, last_string.length - 1);
			} else {
				last_string = last_string + s;
			}
			csbox.data('last_time', t);
			csbox.data('last_string', last_string);
			
			var children = cslist.children();
			for (var i=0; i<children.length; i++) {
				var item = jQuery(children[i]);
				var cur = item.text().substr(0, last_string.length); 
				if (cur.toLowerCase() == last_string.toLowerCase()) {
					var index = jq.prop('selectedIndex');
					jQuery(children[index]).removeClass('selected');
					select_item(item);						
					break;
				}
			}
		}
		jq.hide();
		
		if (!is_combobox) {
			var csbox = jQuery('<div class="csbox" tabindex="0"></div>');
		} else {
			var csbox = jQuery('<input type="text" class="csbox" />');
			
			var placeholder = jq.data('combo-placeholder');
			if (placeholder)
				csbox.attr('placeholder', placeholder);
			
			csbox.keydown(function(e) {
				if (e.keyCode == customselect.KEY_DOWN) {
					list_move(1, true);
					return false;
				} else if (e.keyCode == customselect.KEY_UP) {
					list_move(-1, true);
					return false;
				} else if (e.keyCode == customselect.KEY_ENTER) {
					select_item(cslist.children('.selected:visible'));
					csbox.blur();
					return false;
				} else if (e.keyCode == customselect.KEY_ESCAPE) {
					csbox.blur();
					return false;
				}
			});
			csbox.keyup(function() {
				var val = csbox.val().toLowerCase();
				var children = cslist.children();
				
				if (val == '')
					children.show();
				else {
					for (var i=0; i<children.length; i++) {
						var item = jQuery(children[i]);
						var item_text = item.text().toLowerCase();
						if (item_text.indexOf(val) > -1) {
							item.show();	
						} else {
							item.hide();	
						}
					}	
					list_move(0, true);
				}
			});
			csbox.focus(function() {
				csbox.val('').keyup();
			});
			csbox.blur(function() {
				csbox.val( jq.children(':selected').text() );
			});
			
		}
		var cslist = jQuery('<ul class="cslist"></ul>');
		
		var container = jQuery('<div class="customselect"></div>');
		container.addClass(jq.attr('class'));
		container.append(csbox).append(cslist); 
		
		jq.after(container);
		
		var current_val = jq.val();			
		
		var options = jq.children();
		var selected_index = 0;
		for (var i=0; i<options.length; i++) {
			var opt = jQuery(options[i]);
			var c = '';
			var v = opt.val();
			var li_text = opt.text();
			li_text = li_text.replace('**', '<strong>');
			li_text = li_text.replace('**', '</strong>');
			
			var li = jQuery('<li data-value="' + v + '">' + li_text + '</li>');
			if (append_class)
				li.addClass('value-' + v);
			li.mousedown(function() {
				var me = jQuery(this);
				cslist.children().removeClass('selected');
				select_item(me);
				close_box();
			});
			cslist.append(li);
			if (v == current_val) {
				selected_index = i;
			}
		}
		if (options.length > 9)
			container.addClass('large-list');
		
		
		var children = cslist.children();
		var sel_item = jQuery(children[selected_index]);
		select_item(sel_item);
		
		var fixed_top_offset = parseInt(cslist.css('top'));

		csbox.mousedown(function() {
			if (csbox.hasClass('focused') && !cslist.hasClass('opening')) {
				csbox.blur();
				return false;
			}
		});
		csbox.focus(function() {
			
			if (jq.is(':disabled'))
				return;
				
			cslist.attr('style','display: none');
			csbox.addClass('focused');
			
			if (is_fixed) {
				var offset = csbox.offset();
				var window_offset = jQuery(window).scrollTop();
				cslist.css({top: offset.top + fixed_top_offset - window_offset, left: offset.left});
			}
						
			cslist.addClass('opening').slideDown(customselect.SLIDE_SPEED, function() {
				jQuery(this).removeClass('opening');
			});
		});
		csbox.blur(function() {
			if (!f) {
				close_box();
			}
		});
		var f = false;
		jQuery(document).bind('focusin', function() {
			f = true;
		});
		jQuery(document).bind('focusout', function() {
			f = false;
		});
		
		
		if (!is_combobox)
		csbox.keydown(function(e) {
			if (e.keyCode == customselect.KEY_DOWN) {
				list_move(1);
				return false;
			} else if (e.keyCode == customselect.KEY_UP) {
				list_move(-1);
				return false;
			} else if (e.keyCode == customselect.KEY_ENTER || e.keyCode == customselect.KEY_ESCAPE) {
				close_box();
				return false;
			} else if (e.keyCode == customselect.KEY_BACKSPACE) {
				list_search("backspace");
				return false;
			} else {
				var k = e.keyCode;
				if (k >= 96 && k <= 105) {
					//keypad 0-9
					k -= 48;
				}
				if (
					(k >= 65 && k <= 90) //a-z
					|| (k >= 48 && k <= 57) //0-9 
					|| (k == 32)
				) {
					list_search(String.fromCharCode(k));
					return false;
				}
			}
		});
		
		if (is_fixed) {
			cslist.addClass('is_fixed');
		}
		
		function check_disabled() {
			if (jq.is(':disabled')) {
				container.addClass('is-disabled');
			} else {
				container.removeClass('is-disabled');
			}
		}
		
		check_disabled();
	}
};
jQuery(function() {
	customselect.init('select');
});