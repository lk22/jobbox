var redux = require('redux');
import {applyMiddleware} from 'redux';
import thunk from 'redux-thunk';
import { routerReducer } from 'react-router-redux';
import { usersReducer, userReducer, tagsReducer, feedReducer, cookieReducer} from '../reducers/reducers.js';

// config the redux store to hold state
export var configure = (state = {}) => {
	var reducers = redux.combineReducers({
		routing: routerReducer, // routing reducer to keep track of the state while navigating
	});

	var store = redux.createStore(reducers, state, redux.compose(
		applyMiddleware(thunk),
		window.devToolsExtension ? window.devToolsExtension() : f => f
	));

	return store;
};
