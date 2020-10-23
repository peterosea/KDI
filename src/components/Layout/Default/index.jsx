import React from 'react';
// components
import GNB from '@c/GNB';

const Default = (props) => {
  return (
    <>
      <GNB />
      <div>{props.children}</div>
    </>
  );
};

export default Default;
