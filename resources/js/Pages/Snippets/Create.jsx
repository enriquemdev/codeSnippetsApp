import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import InputError from '@/Components/InputError';
import PrimaryButton from '@/Components/PrimaryButton';
import { useForm, Head } from '@inertiajs/inertia-react';

import MultiAutocomplete from '@/MUI_Components/MultiAutocomplete';
import SelectMUI from '@/MUI_Components/SelectMUI';


export default function Create({ auth, technologies, seguridad_snippets}) {
    const { data, setData, post, processing, reset, errors } = useForm({ 
        name: '',
        description: '',
        text: '',

    });

    const submit = (e) => {
        e.preventDefault();
        post(route('snippets.store'), { onSuccess: () => reset() });
    };

    return (
        <AuthenticatedLayout auth={auth}>
            <Head title='Snippets aaa'></Head>

            <div className='max-w-2xl mx-auto p-4 sm:p-6 lg:p-8'>
                <form onSubmit={submit}>
                    <input
                        type="text"
                        value={data.name}
                        placeholder="Nombre del snippet de código"
                        className="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        onChange={e => setData('name', e.target.value)}
                    ></input>
                    <InputError message={errors.name} className="mt-2" />


                    <textarea
                        value={data.description}
                        placeholder="Descripcion del snippet"
                        className="mt-4 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        onChange={e => setData('description', e.target.value)}
                    ></textarea>

                    <InputError message={errors.text} className="mt-2" />

                    <MultiAutocomplete 
                        className='bg-white mt-4 focus:border-indigo-300 w-full rounded-md'
                        options={ technologies }
                        label='Tecnologías'
                        placeholder='Selecciona las tecnologías relacionadas al snippet'
                    ></MultiAutocomplete>

                    <textarea
                        value={data.text}
                        placeholder="Escribe tu snippet!"
                        className="mt-4 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        onChange={e => setData('text', e.target.value)}
                    ></textarea>

                    <InputError message={errors.text} className="mt-2" />

                    <SelectMUI
                        options={ seguridad_snippets }
                    ></SelectMUI>

                    <PrimaryButton className="mt-5" processing={processing}>Añadir Snippet</PrimaryButton>
                </form>
            </div>
        </AuthenticatedLayout>
    );
}