import React from 'react';
// components
import GNB from '@c/GNB';
import FNB from '@c/FNB';

const Default = (props) => {
  return (
    <>
      <GNB />
      <main>{props.children}</main>
      <FNB />
    </>
  );
};

export default Default;
