<?php
/*
 * Page Name: PRO FEATURES 🚀
 */

defined( 'ABSPATH' ) || exit;

$features = [
	[
		'icon'  => 'fa-solid fa-layer-group',
		'bg'    => '#4CAF50',
		'title' => __( 'Submenus', 'side-menu-lite' ),
		'desc'  => __( 'Group related items into collapsible submenus to reduce clutter and enhance structure. ', 'side-menu-lite' ),
	],
	[
		'icon'  => 'fa-solid fa-paperclip',
		'bg'    => '#4ec477',
		'title' => __( 'Connect All Items', 'side-menu-lite' ),
		'desc'  => __( 'Hovering over one item can open all menu items simultaneously, creating a smooth, unified interaction. ', 'side-menu-lite' ),
	],
	[
		'icon'  => 'fa-solid fa-binoculars',
		'bg'    => '#e7332e',
		'title' => __( 'ScrollSpy', 'side-menu-lite' ),
		'desc'  => __( 'Highlight the active section in the menu based on current scroll position — great for one-page layouts and guides. ', 'side-menu-lite' ),
	],

	[
		'icon'  => 'fa-solid fa-image',
		'bg'    => '#2196F3',
		'title' => __( 'Custom Icons, Emojis & Letters', 'side-menu-lite' ),
		'desc'  => __( 'Upload your own icons or use emojis and letters for creative, unique, or casual designs. ', 'side-menu-lite' ),
	],

	[
		'icon'  => 'fa-solid fa-pen-to-square',
		'bg'    => '#ec897e',
		'title' => __( 'Extended Labels & Hold Open', 'side-menu-lite' ),
		'desc'  => __( 'Add longer text descriptions and keep label text visible with the “Hold Open” option for clarity and accessibility.', 'side-menu-lite' ),
	],

	[
		'icon'  => 'fa-solid fa-share-nodes',
		'bg'    => '#e7332e',
		'title' => __( 'Social Sharing', 'side-menu-lite' ),
		'desc'  => __( 'Include social sharing links from 30+ services to help users share your content and boost traffic. ', 'side-menu-lite' ),
	],

	[
		'icon'  => 'fa-solid fa-language',
		'bg'    => '#c65ebc',
		'title' => __( 'Translate', 'side-menu-lite' ),
		'desc'  => __( 'Let visitors translate your website content in real time. ', 'side-menu-lite' ),
	],

	[
		'icon'  => 'fa-solid fa-print',
		'bg'    => '#5fddc5',
		'title' => __( 'Print', 'side-menu-lite' ),
		'desc'  => __( 'PAdd a quick-access print button that launches the browser print dialog for easy page printing.', 'side-menu-lite' ),
	],
	[
		'icon'  => 'fa-solid fa-arrow-right-arrow-left',
		'bg'    => '#437fb2',
		'title' => __( 'Next / Previous Post Navigation', 'side-menu-lite' ),
		'desc'  => __( 'Automatically link to the next or previous post within the same category to keep visitors engaged and moving through your content.', 'side-menu-lite' ),
	],
	[
		'icon'  => 'fa-solid fa-arrows-up-down',
		'bg'    => '#f2c35d',
		'title' => __( 'Scroll to Top / Bottom', 'side-menu-lite' ),
		'desc'  => __( 'Add one-click scroll links that take users instantly to the top or bottom of the page — ideal for long content pages. ', 'side-menu-lite' ),
	],
    [
		'icon'  => 'fa-solid fa-magnifying-glass',
		'bg'    => '#ea84ad',
		'title' => __( 'Search', 'side-menu-lite' ),
		'desc'  => __( 'Include a live search input directly inside the menu, enabling users to quickly find content without leaving the current view. ', 'side-menu-lite' ),
	],

	[
		'icon'  => 'fa-solid fa-crosshairs',
		'bg'    => '#4b0888',
		'title' => __( 'Hiding/Showing', 'side-menu-lite' ),
		'desc'  => __( 'Allows you to control the visibility of your floating menus based on the user\'s scroll position on the webpage. ', 'side-menu-lite' ),
	],

	[
		'icon'  => 'fa-solid fa-arrows-up-down',
		'bg'    => '#39c282',
		'title' => __( 'Scroll-Based Visibility', 'side-menu-lite' ),
		'desc'  => __( 'Show the menu after the user scrolls a specific distance, hide it after a defined scroll point, or make it sticky and responsive to scrolling. ', 'side-menu-lite' ),
	],

	[
		'icon'  => 'fa-solid fa-stopwatch-20',
		'bg'    => '#eb3932',
		'title' => __( 'Timer-Based Visibility', 'side-menu-lite' ),
		'desc'  => __( 'Delay menu appearance using a display timer, or automatically hide it after a certain number of seconds. ', 'side-menu-lite' ),
	],

	[
		'icon'  => 'fa-solid fa-link',
		'bg'    => '#ea84ad',
		'title' => __( 'Activate by URL', 'side-menu-lite' ),
		'desc'  => __( 'Display the menu only when the current page URL contains specific keywords or parameters. ', 'side-menu-lite' ),
	],

	[
		'icon'  => 'fa-solid fa-handshake-angle',
		'bg'    => '#437fb2',
		'title' => __( 'Activate by Referrer URL', 'side-menu-lite' ),
		'desc'  => __( 'Trigger menu display based on the visitor’s referrer — useful for targeting traffic from ads or campaigns.  ', 'side-menu-lite' ),
	],

	[
		'icon'  => 'fa-solid fa-display',
		'bg'    => '#ff9800',
		'title' => __( 'Comprehensive Display Controls', 'side-menu-lite' ),
		'desc'  => __( 'Use shortcodes, post types, tags, categories, or archive pages to fine-tune where and when your menu appears. ', 'side-menu-lite' ),
	],

	[
		'icon'  => 'fa-solid fa-tablet-screen-button',
		'bg'    => '#df6928',
		'title' => __( 'Device-Based Visibility', 'side-menu-lite' ),
		'desc'  => __( 'Remove the menu entirely on mobile or desktop devices to optimize performance and layout per screen. ', 'side-menu-lite' ),
	],

    [
		'icon'  => 'fa-solid fa-users',
		'bg'    => '#4CAF50',
		'title' => __( 'User Role Permissions', 'side-menu-lite' ),
		'desc'  => __( 'Restrict menu visibility for specific user roles (e.g., Admins, Editors, Subscribers).', 'side-menu-lite' ),
	],
	[
		'icon'  => 'fa-solid fa-language',
		'bg'    => '#673ab7',
		'title' => __( 'Multilingual Support', 'side-menu-lite' ),
		'desc'  => __( 'Show menus based on language preferences. Compatible with WPML and Polylang.', 'side-menu-lite' ),
	],
	[
		'icon'  => 'fa-solid fa-calendar-day',
		'bg'    => '#3f51b5',
		'title' => __( 'Scheduling', 'side-menu-lite' ),
		'desc'  => __( 'Schedule menu appearances based on specific days, times, and dates. This allows you to promote temporary events or campaigns without cluttering your website permanently. ', 'side-menu-lite' ),
	],

	[
		'icon'  => 'fa-brands fa-chrome',
		'bg'    => '#3f51b5',
		'title' => __( 'Browser Compatibility', 'side-menu-lite' ),
		'desc'  => __( 'Ensure your menus display correctly across a wide range of browsers. If necessary, you can choose to hide menus for specific browsers to address compatibility issues with outdated software versions. ', 'side-menu-lite' ),
	],
];

?>

<div class="wowp-pro-upgrade">
    <div>
        <h3>Unlock PRO Features</h3>
        <p>Upgrade to Side Menu PRO and get advanced features like</p>
        <a href="https://wow-estore.com/item/side-menu-pro/" target="_blank" class="button button-primary">Get Side Menu
            PRO</a>
    </div>
    <dl class="wowp-pro__profits">
        <div class="wowp-pro__profit">
            <dt><span class="wpie-icon wpie_icon-money-time"></span>No Yearly Fees</dt>
            <dd>One-time payment. Use it forever.</dd>
        </div>
        <div class="wowp-pro__profit">
            <dt><span class="wpie-icon wpie_icon-refund"></span>14-Day Money-Back Guarantee</dt>
            <dd>Try it risk-free. Get a full refund if you’re not satisfied.</dd>
        </div>
        <div class="wowp-pro__profit">
            <dt><span class="wpie-icon wpie_icon-cloud-data-sync"></span>Lifetime Free Updates</dt>
            <dd>Always stay up to date — at no extra cost.</dd>
        </div>
        <div class="wowp-pro__profit">
            <dt><span class="wpie-icon wpie_icon-customer-support"></span>Priority Support</dt>
            <dd>Fast, friendly, and expert help whenever you need it.</dd>
        </div>
    </dl>

</div>

<div class="wowp-pro-features">

	<?php foreach ( $features as $feature ) : ?>

		<?php if ( ! empty( $feature['icon'] ) ): ?>
            <div class="wowp-pro-feature">
                <div class="wowp-pro-feature__icon" style="background: <?php echo esc_attr( $feature['bg'] ); ?>">
                    <span class="<?php echo esc_attr( $feature['icon'] ); ?>"></span>
                </div>
                <div class="wowp-pro-feature__content">
                    <div class="wowp-pro-feature__title">
						<?php echo esc_html( $feature['title'] ); ?>
                    </div>
                    <div class="wowp-pro-feature__desc">
						<?php echo esc_html( $feature['desc'] ); ?>
                    </div>
                </div>
            </div>
		<?php endif; ?>
	<?php endforeach; ?>
</div>
<?php
