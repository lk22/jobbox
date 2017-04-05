import Request from './../../helpers/Request.js';
import Component from './../../helpers/Component.js';

export class CreateNewJobApplicationForm {

	/** 
	 * constructor
	 */
	constructor() {
		this.request = new Request();
		this.form = new Component('.job-application-form');
	}

	fire() {

		let createApplicationBtn = this.form.find('.submitBtn');
		let jobApplicationTitle = this.form.find('#title');
		let jobApplicationfield = this.form.find('.new-job-application-field');

		createApplicationBtn.click(function(e) {
			e.preventDefault();

			let title = jobApplicationTitle.val();
			let jobApplication = jobApplicationfield.val();
			console.log("Values from form : " + title + ' ' + jobApplication);
		});

	}

}
export default CreateNewJobApplicationForm;