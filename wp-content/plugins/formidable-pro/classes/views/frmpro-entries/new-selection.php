<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}
?>
<div id="form_entries_page" class="wrap">
	<h2><?php esc_html_e( 'Add New Entry', 'formidable-pro' ); ?></h2>

    <div id="menu-management" class="clear nav-menus-php frm-menu-boxes">
        <div class="menu-edit">
        <div id="nav-menu-header"><div class="major-publishing-actions" style="padding:8px 0;">
			<div style="font-size:15px;background:transparent;" class="search">
				<?php esc_html_e( 'Add New Entry', 'formidable-pro' ); ?>
			</div>
        </div></div>

        <form method="get">
            <div id="post-body">
			<p><?php esc_html_e( 'Select a form for your new entry.', 'formidable-pro' ); ?></p>
            <input type="hidden" name="frm_action" value="new" />
            <input type="hidden" name="page" value="formidable-entries" />
			<?php FrmFormsHelper::forms_dropdown( 'form', '', array( 'blank' => false ) ); ?><br/>
            </div>
            <div id="nav-menu-footer">
				<div class="major-publishing-actions">
					<input type="submit" class="button-primary" value="<?php esc_attr_e( 'Go', 'formidable-pro' ); ?>" />
				</div>

            <div class="clear"></div>
            </div>
        </form>
        </div>

    </div>
    <div class="clear"></div>
</div>
