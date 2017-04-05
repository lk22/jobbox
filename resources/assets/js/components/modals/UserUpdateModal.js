import Helper from './../../Helper.js';
import Request from './../../helpers/Request.js';
import Component from './../../helpers/Component.js';

export class UserUpdateModal {

	constructor() {

		this.helper = new Helper();
		this.request = new Request();
		
		this.form = $('.user-update-form');
		this.submitBtn = this.form.find('.user-update-form');
		this.fire();
	}

	fire() {

		/**
		 * when submitting form
		 */

	}

}
export default UserUpdateModal;