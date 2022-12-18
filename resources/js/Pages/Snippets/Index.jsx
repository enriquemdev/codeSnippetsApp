import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import InputError from '@/Components/InputError';
import PrimaryButton from '@/Components/PrimaryButton';
import { useForm, Head } from '@inertiajs/inertia-react';

import IndividualSnippet from '@/Components/IndividualSnippet';


export default function Index({ auth, snippets }) {
    // const { data, setData, post, processing, reset, errors } = useForm({ 
    //     name: '',
    //     text: '',
    // });

    // const submit = (e) => {
    //     e.preventDefault();
    //     post(route('snippets.store'), { onSuccess: () => reset() });
    // };

    return (
        <AuthenticatedLayout auth={auth}>
            <Head title='Snippets aaa'></Head>

            <div className='max-w-4xl mx-auto p-4 sm:p-6 lg:p-8 '>

                <div className="mt-6  divide-y ">
                        {snippets.map(snippet =>
                            <IndividualSnippet key={snippet.id} snippet={snippet} />
                        )}
                </div> 

            </div>
        </AuthenticatedLayout>
    );
}