import React from 'react';
import PropTypes from 'prop-types';
import loading from './loading.gif';

const Spinner = ({ size = 50, className = '' }) => {
  return (
    <div className={`text-center ${className}`} role="status" aria-live="polite">
      <img 
        src={loading} 
        alt="Loading content..." 
        height={size}
        width={size}
        style={{ display: 'inline-block' }}
      />
      <span className="visually-hidden">Loading...</span>
    </div>
  );
};

Spinner.propTypes = {
  size: PropTypes.number,
  className: PropTypes.string
};

export default Spinner;