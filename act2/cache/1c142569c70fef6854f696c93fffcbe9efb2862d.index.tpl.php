<?php /*%%SmartyHeaderCode:860350a83d814ca344-88914192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c142569c70fef6854f696c93fffcbe9efb2862d' => 
    array (
      0 => '.\\templates\\layout\\index.tpl',
      1 => 1348597768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '860350a83d814ca344-88914192',
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50a83e497b3c07_83967625',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a83e497b3c07_83967625')) {function content_50a83e497b3c07_83967625($_smarty_tpl) {?>{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}

<PRE>

{* bold and title are read from the config file *}
{if #bold#}<b>{/if}
{* capitalize the first letters of each word of the title *}
Title: {#title#|capitalize}
{if #bold#}</b>{/if}

The current date and time is {$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}

The value of global assigned variable $SCRIPT_NAME is {$SCRIPT_NAME}

Example of accessing server environment variable SERVER_NAME: {$smarty.server.SERVER_NAME}

The value of {ldelim}$Name{rdelim} is <b>{$Name}</b>

variable modifier example of {ldelim}$Name|upper{rdelim}

<b>{$Name|upper}</b>


An example of a section loop:

{section name=outer 
loop=$FirstName}
{if $smarty.section.outer.index is odd by 2}
	{$smarty.section.outer.rownum} . {$FirstName[outer]} {$LastName[outer]}
{else}
	{$smarty.section.outer.rownum} * {$FirstName[outer]} {$LastName[outer]}
{/if}
{sectionelse}
	none
{/section}

An example of section looped key values:

{section name=sec1 loop=$contacts}
	phone: {$contacts[sec1].phone}<br>
	fax: {$contacts[sec1].fax}<br>
	cell: {$contacts[sec1].cell}<br>
{/section}
<p>

testing strip tags
{strip}
<table border=0>
	<tr>
		<td>
			<A HREF="{$SCRIPT_NAME}">
			<font color="red">This is a  test     </font>
			</A>
		</td>
	</tr>
</table>
{/strip}

</PRE>

This is an example of the html_select_date function:

<form>
{html_select_date start_year=1998 end_year=2010}
</form>

This is an example of the html_select_time function:

<form>
{html_select_time use_24_hours=false}
</form>

This is an example of the html_options function:

<form>
<select name=states>
{html_options values=$option_values selected=$option_selected output=$option_output}
</select>
</form>

{include file="footer.tpl"}
<?php }} ?>