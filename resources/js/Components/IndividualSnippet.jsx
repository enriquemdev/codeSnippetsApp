import React from 'react';
import dayjs from 'dayjs';
import relativeTime from 'dayjs/plugin/relativeTime';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faCode } from '@fortawesome/free-solid-svg-icons';

 
dayjs.extend(relativeTime);
 
export default function IndividualSnippet({ snippet }) {
    return (
        <div className="p-6 flex space-x-2 mb-8 bg-white dark:bg-gray-50 shadow-md rounded-lg ">
            {/* <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth="2">
                <path strokeLinecap="round" strokeLinejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg> */}
            <FontAwesomeIcon icon={faCode} className="text-3xl text-gray-700"/>
            
            <div className="flex-1">
                <div className="flex justify-between items-center">
                    <span className="text-blue-900 text-3xl font-extrabold">{snippet.name}</span>
                    <small className="ml-2 text-sm text-gray-600">{dayjs(snippet.created_at).fromNow()}</small>
                </div>
                
                <div>         
                    <span className="text-gray-700 text-sm">{snippet.user.name} - {snippet.user.email}</span>
                </div>
                
                <div className='descripcion mt-5 text-lg text-gray-900'>
                    <h5 className="font-bold text-blue-900">Description: </h5>
                    <p>{snippet.description}</p>
                </div>

                <div className='descripcion mt-5 text-lg text-gray-900'>
                    <h5 className="font-bold text-blue-900">Code Snippet: </h5>
                    <p>{snippet.text}</p>
                </div>
                
            </div>
        </div>
    );
}