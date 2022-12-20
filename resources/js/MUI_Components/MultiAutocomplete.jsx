import * as React from 'react';
import Checkbox from '@mui/material/Checkbox';
import TextField from '@mui/material/TextField';
import Autocomplete from '@mui/material/Autocomplete';
import CheckBoxOutlineBlankIcon from '@mui/icons-material/CheckBoxOutlineBlank';
import CheckBoxIcon from '@mui/icons-material/CheckBox';

const icon = <CheckBoxOutlineBlankIcon fontSize="small" />;
const checkedIcon = <CheckBoxIcon fontSize="small" />;

export default function CheckboxesTags( {className, options, label, placeholder}) {

    //Recordar hacer escalable este componente

    //Esto se hace para que lea los datos de manera correcta ya que viene como un array asociativo por defecto
    //O se hace esto aqui o se hace desde laravel pasar de coleccion a array asociativo y luego a array normal con solo los valores
    const optionsList = Object.values(options);

  return (
    <Autocomplete
      multiple
      id="checkboxes-tags-demo"
      options={optionsList}
      disableCloseOnSelect
      getOptionLabel={(option) => option.name}
      renderOption={(props, option, { selected }) => (
        <li {...props}>
          <Checkbox
            icon={icon}
            checkedIcon={checkedIcon}
            style={{ marginRight: 8 }}
            checked={selected}
          />
          {option.name}
        </li>
      )}
    //   style={{ width: 500 }}
      renderInput={(params) => (
        <TextField {...params} label={label} placeholder={placeholder} />
      )}
      className={ className }
    />
  );
}