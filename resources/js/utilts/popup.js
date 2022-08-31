import {Fancybox} from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox.css";

Fancybox.bind('[data-fancybox="open_cart_popup"]', {
	closeButton: false,
	dragToClose: false,
	click: false,

	on: {
		shouldClose: function (fancybox, event) {
			console.log(event)
			const value =
				event && event.target ? parseInt(event.target.dataset.value, 10) : 0;

			console.log(`value: ${value}`);

			if (value !== 1) {
				return false;
			}
		},
	},
});

